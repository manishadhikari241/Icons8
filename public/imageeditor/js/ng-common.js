(function() {
  angular.module('ng-filter', []).filter('th', function() {
    return function(number) {
      if (number === 1) {
        return number + "st";
      }
      if (number === 2) {
        return number + "nd";
      }
      if (number === 3) {
        return number + "rd";
      }
      return number + "th";
    };
  }).filter('isEmpty', function() {
    return function(object) {
      return angular.equals({}, object);
    };
  }).filter('groupBy', [
    '$parse', function($parse) {
      return _.memoize(function(items, field) {
        var getter;
        getter = $parse(field);
        return _.groupBy(items, function(item) {
          return getter(item);
        });
      });
    }
  ]).filter('multipleOf', function() {
    return function(arrayLength) {
      var arr, i;
      arrayLength = Math.ceil(arrayLength);
      arr = new Array(arrayLength);
      i = 0;
      while (i < arrayLength) {
        arr[i] = i;
        i++;
      }
      return arr;
    };
  }).filter('orderObjectBy', function() {
    return function(items, field, reverse) {
      var filtered;
      filtered = [];
      angular.forEach(items, function(item) {
        filtered.push(item);
      });
      filtered.sort(function(a, b) {
        if (a[field] > b[field]) {
          return 1;
        } else {
          return -1;
        }
      });
      if (reverse) {
        filtered.reverse();
      }
      return filtered;
    };
  }).filter('format_bytes', function() {
    return function(bytes, si) {
      var thresh, u, units;
      si = 1024;
      thresh = si ? 1000 : 1024;
      if (bytes < thresh) {
        return bytes + ' B';
      }
      units = si ? ['KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'] : ['KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB'];
      u = -1;
      while (true) {
        bytes /= thresh;
        ++u;
        if (!(bytes >= thresh)) {
          break;
        }
      }
      return bytes.toFixed(1) + ' ' + units[u];
    };
  }).filter('str_limit', function() {
    return function(value, max, wordwise, tail) {
      var lastspace;
      if (!value) {
        return '';
      }
      max = parseInt(max, 10);
      if (!max) {
        return value;
      }
      if (value.length <= max) {
        return value;
      }
      value = value.substr(0, max);
      if (wordwise) {
        lastspace = value.lastIndexOf(' ');
        if (lastspace !== -1) {
          value = value.substr(0, lastspace);
        }
      }
      return value + (tail || '...');
    };
  }).filter('truncateMiddle', function() {
    return function(str, length, separator) {
      var end, pad, start;
      if (length == null) {
        length = 20;
      }
      if (separator == null) {
        separator = '...';
      }
      if (str === null) {
        return '';
      }
      if (str === void 0) {
        return '';
      }
      if (str.length <= length) {
        return str;
      }
      pad = Math.round((length - separator.length) / 2);
      start = str.substr(0, pad);
      end = str.substr(str.length - pad);
      return [start, separator, end].join('');
    };
  }).filter('mobile', function() {
    return function(str) {
      var city, country, mobile, number, value;
      value = str.toString().trim().replace(/^\+|\s/g, '');
      country = value.slice(0, 3);
      city = value.slice(3, 5);
      number = value.slice(5);
      number = number.slice(0, 3) + ' ' + number.slice(3);
      mobile = (country + ' ' + city + ' ' + number).trim();
      mobile = mobile !== '' ? '+' + mobile : void 0;
      return mobile;
    };
  }).filter('landline', function() {
    return function(str) {
      var city, country, number, value;
      value = str.toString().trim().replace(/^\+|\s/g, '');
      country = value.slice(0, 3);
      city = value.slice(3, 4);
      number = value.slice(4);
      number = number.slice(0, 3) + ' ' + number.slice(3);
      return ('+' + country + ' ' + city + ' ' + number).trim();
    };
  }).filter('priceCurrency', [
    '$window', function($window) {
      return function(str, currency) {
        var ref;
        if (!str) {
          str = 0;
        }
        if (angular.isUndefined(currency)) {
          currency = $window.PrintArabia.Vars.Currency || 'AED';
        }
        if ((((ref = $window.Vars) != null ? ref.CurrencyPosition : void 0) != null) && $window.Vars.CurrencyPosition === true) {
          return String(currency + str);
        }
        return str + String(currency);
      };
    }
  ]).filter('mmToCm', function() {
    return function(mm, decimalPoint) {
      var remainder, x, y;
      x = 0;
      if (angular.isUndefined(decimalPoint)) {
        decimalPoint = 2;
      }
      if (_.isNumber(mm)) {
        x = _h.numberFormat(mm * 0.1, decimalPoint);
        remainder = x % 1;
        if (remainder === 0) {
          x = Math.ceil(x);
        } else {
          y = x.toString().substr(-1, 1);
          if (y === "0") {
            x = x.toString().substring(0, x.toString().length - 1);
          }
        }
      }
      return x;
    };
  }).filter('trusted_html', [
    '$sce', function($sce) {
      return function(text) {
        return $sce.trustAsHtml(text);
      };
    }
  ]).filter('toDateFormat', function() {
    return function(dateString, format) {
      if (angular.isUndefined(format)) {
        format = 'YYYY-MM-DD HH:mm:ss';
      }
      return moment(dateString).format(format);
    };
  }).filter('dateTimeFormat', [
    '$filter', function($filter) {
      return function(dateString, format) {
        var a;
        if (angular.isUndefined(format)) {
          format = 'YYYY-MM-DD';
        }
        a = dateString.split(/[^0-9]/);
        return $filter('date')(new Date(a[0], a[1] - 1, a[2], a[3], a[4], a[5]), format);
      };
    }
  ]);

}).call(this);


/**
 * Route Factory
 *
 * @class Api Factory
 */

(function() {
  angular.module('ng-route-api', []).factory("routeApi", [
    '$http', '$rootScope', '$q', '$window', function($http, $rootScope, $q, $window) {
      return {
        send: function(url, data, method, qdefer, isajax) {
          var httpDataRequest;
          if (data == null) {
            data = {};
          }
          if (method == null) {
            method = 'GET';
          }
          if (isajax === true) {
            this.$$additionalHTTPHeader();
          }
          if (_.size(data) > 0 && $window.csrf && method.toLowerCase() === 'post') {
            data._token = $window.csrf;
          }
          httpDataRequest = {
            method: method,
            url: url,
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },
            data: $.param(data)
          };
          if (qdefer) {
            return this.$$qDeferRequest(httpDataRequest, qdefer);
          }
          if (method === 'GET') {
            return $http.get(url);
          }
          return $http(httpDataRequest);
        },

        /*
        			 *   Authentication   = Site Authentication Token
        			 *   X-Requested-With = Set Http Request to AJAX FORMAT
         */
        $$additionalHTTPHeader: function() {
          var AuthKey;
          if (!AuthKey) {
            AuthKey = $str_random();
          }
          $http.defaults.headers.common['Authentication'] = AuthKey || null;
          $http.defaults.headers.common['X-Requested-With'] = "XMLHttpRequest";
        },
        $$qDeferRequest: function(httpDataRequest, qdefer) {
          var promise;
          if (angular.isUndefined(this.qRequest)) {
            this.qRequest = [];
          }
          this.qRequest.push(qdefer);
          promise = $http(angular.extend(httpDataRequest, {
            timeout: qdefer.promise
          }));
          promise["finally"]((function() {
            this.qRequest = _.filter(this.qRequest, function(request) {
              return request.url !== httpDataRequest.url;
            });
          }));
          return promise;
        },
        cancel: function() {
          angular.forEach(this.qRequest, function(canceller) {
            canceller.resolve();
          });
          if (angular.isUndefined(this.qRequest)) {
            return this.qRequest = [];
          }
        }
      };
    }
  ]);

}).call(this);
