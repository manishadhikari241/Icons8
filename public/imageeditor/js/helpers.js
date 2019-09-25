/**
 * Act as our Helpers for all our projects.
#
 * @class Helpers
 * @package Base Helper Class
 */

  /**
   * Initialize angular module
  #
   * @param {string} moduleName
   * @param {array} config
   * @return angular instance
   */
  function $angularModule (moduleName, config) {
    var _this = this;
    return angular.module(moduleName, config);
  };

  /**
   * Initialize angular module
  #
   * @param {string} moduleName
   * @param {array} config
   * @return angular instance
   */
  function $initNgModules (element) {
      var elements = [element],
          moduleElements = [],
          modules = [],
          names = ['ng:module', 'ng-module', 'x-ng-module', 'data-ng-module', 'ng:modules', 'ng-modules', 'x-ng-modules', 'data-ng-modules'],
          NG_MODULE_CLASS_REGEXP = /\sng[:\-]module[s](:\s*([\w\d_]+);?)?\s/;

      function append(element) {
          element && elements.push(element);
      }

      for(var i = 0; i < names.length; i++) {
          var name = names[i];
          names[i] = true;
          append(document.getElementById(name));
          name = name.replace(':', '\\:');
          if (element.querySelectorAll) {
              var elements2;
              elements2 = element.querySelectorAll('.' + name);
              for(var j = 0; j < elements2.length; j++) append(elements2[j]);

              elements2 = element.querySelectorAll('.' + name + '\\:');
              for(var j = 0; j < elements2.length; j++) append(elements2[j]);

              elements2 = element.querySelectorAll('[' + name + ']');
              for(var j = 0; j < elements2.length; j++) append(elements2[j]);
          }
      }

      for(var i = 0; i < elements.length; i++) {
          var element = elements[i];

          var className = ' ' + element.className + ' ';
          var match = NG_MODULE_CLASS_REGEXP.exec(className);
          if (match) {
              moduleElements.push(element);
              modules.push((match[2] || '').replace(/\s+/g, ','));
          } else {
              if(element.attributes) {
                  for (var attrName in element.attributes) {
                      if(attrName == "length") continue;
                      var attr = { name: attrName, value: element.attributes[attrName].nodeValue };

                      if (names[attr.name]) {
                          moduleElements.push(element);
                          modules.push(attr.value);
                      }
                  }
              }
          }
      }

      for(var i = 0; i < moduleElements.length; i++) {
          var moduleElement = moduleElements[i];
          if (typeof(modules[i]) != 'undefined') {
              var module = modules[i].replace(/ /g,'').split(",");
              angular.bootstrap(moduleElement, module);
          }
      }
  }

  /**
   * @return string
   */
  function $redirect (url) {
    return window.location.href = url;
  };

  /**
   * @return string
   */
  function $reload () {
    return window.location.reload();
  };

  /**
   * Generate Random Number
  #
   * @param {string} key
   * @return void
   */

  function $str_random (str_count) {
    var i, k, randomChar, ref, result;
    if (!str_count) {
      str_count = 32;
    }
    result = '';
    randomChar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (i = k = 0, ref = str_count; k < ref; i = k += 1) {
      result += randomChar.charAt(Math.floor(Math.random() * randomChar.length));
    }
    return result;
  };

/**
 * is valid url
 */
function $is_url(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
    '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    return pattern.test(str);
}