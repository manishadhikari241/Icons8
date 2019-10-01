/**
 *
 * @class UserApp
 * @author Rynelle Coronacion <dev.rynelle@gmail.com>
 */

(function () {
    window.Front.ImgholdrApp = $angularModule('ImgholdrApp', ['ui.router', 'ng-route-api', 'localytics.directives', 'ui.bootstrap', 'colorpicker.module']);

}).call(this);


/**
 * @class UserApp
 * @author Rynelle Coronacion <dev.rynelle@gmail.com>
 */

(function () {
    window.Front.ImgholdrApp.controller("ImgholdrController", [
        '$scope', '$window', 'routeApi', '$q', '$timeout', function ($scope, $window, $routeapi, $q, $timeout) {
            var ImgholdrController;
            ImgholdrController = (function () {
                function ImgholdrController() {
                    // console.log($window.Routes);
                    $scope.moreoptions = false;
                    $scope.togglecomment = false;
                    $scope.removetext = false;
                    $scope.transparentbg = false;
                    $scope.imageloader = false;
                    $scope.iconselected = null;
                    $scope.fontfamilies = $window.Vars.Fonts;
                    $scope.url = $window.Routes.GetImage + '/420x320';
                    $scope.data = {
                        width: '420px',
                        height: '320px',
                        background: '#cccccc',
                        color: '#757575'
                    };
                    $scope.moredata = {
                        message: null,
                        fontsize: null,
                        fontfamily: null
                    };
                    $scope.submit = {
                        width: '420px',
                        height: '320px',
                        background: '#cccccc',
                        color: '#757575'
                    };
                    $scope.vars = $window.Vars;
                    $scope.urlimage = $scope.url;
                    return;
                }

                $scope.$watch("data.width", function (w) {
                    if (w) {
                        return $scope.submit.width = w.toLowerCase().replace(/\D+/g, '');
                    }
                });

                $scope.$watch("data.height", function (h) {
                    if (h) {
                        return $scope.submit.height = h.toLowerCase().replace(/\D+/g, '');
                    }
                });

                $scope.$watch("data.background", function (bg) {
                    if (bg) {
                        return $scope.submit.background = bg.toLowerCase().replace('#', '');
                    }
                });

                $scope.$watch("data.color", function (c) {
                    if (c) {
                        return $scope.submit.color = c.toLowerCase().replace('#', '');
                    }
                });

                $scope.$watch("moredata.message", function (msg) {
                    if (msg) {
                        msg = msg.replace(/\s/g, '+');
                        msg = msg.replace(/[`~!@#%$^&*()|\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                    }
                    $scope.submit.message = msg;
                });

                $scope.$watch("moredata.fontsize", function (fs) {
                    $scope.submit.fontsize = null;
                    if (fs) {
                        return $scope.submit.fontsize = fs.toLowerCase().replace(/\D+/g, '');
                    }
                });

                $scope.$watch("moredata.fontfamily", function (ff) {
                    if (ff && _.size(ff) > 0) {
                        $scope.submit.fontfamily = ff;
                    } else {
                        $scope.submit.fontfamily = null;
                    }
                });

                $scope.$watch("removetext", function (rt) {
                    return $scope.geturl();
                });

                $scope.$watch("transparentbg", function (rt) {
                    return $scope.geturl();
                });

                $scope.iconClick = function (code) {
                    $scope.iconselected = code;
                    $scope.image();
                    console.log('ok');

                };


                /**
                 *
                 * @return authLogin
                 */

                $scope.downloadImage = function () {
                    var downloadurl;
                    $scope.geturl();
                    downloadurl = angular.copy($scope.url);
                    downloadurl += downloadurl.indexOf('?') < 0 ? '?' : '&';
                    downloadurl += 'download=true';
                    $window.location.href = downloadurl;
                };

                $scope.geturl = function (isdownload) {
                    $scope.url = $window.Routes.GetImage;
                    console.log($scope.url);
                    $scope.url += "/";
                    $scope.url += $scope.submit.width + 'x' + $scope.submit.height;
                    if ($scope.transparentbg) {
                        $scope.url += "/transparent";
                    } else {
                        if ($scope.submit.background !== 'cccccc' || $scope.submit.color !== '757575' || $scope.iconselected) {
                            $scope.url += "/" + $scope.submit.background;
                        }
                    }
                    if ($scope.submit.color !== '757575' || $scope.iconselected) {
                        $scope.url += "/" + $scope.submit.color;
                    }
                    if ($scope.iconselected) {
                        $scope.url += "/" + $scope.iconselected;
                    }
                    if ($scope.url.indexOf('?') < 0 && ($scope.submit.message || $scope.submit.fontsize || $scope.submit.fontfamily || $scope.removetext)) {
                        $scope.url += "?";
                    }
                    if ($scope.removetext) {
                        $scope.url += "&text=_none_";
                        $scope.moredata.message = null;
                    } else if ($scope.submit.message) {
                        if ($scope.submit.message === '_none_') {
                            $scope.url += "&text=_none_";
                            $scope.moredata.message = null;
                            $scope.removetext = true;
                        } else {
                            $scope.url += "&text=" + $scope.submit.message;
                        }
                    }
                    if ($scope.submit.fontsize) {
                        $scope.url += "&font-size=" + $scope.submit.fontsize;
                    }
                    if ($scope.submit.fontfamily) {
                        $scope.url += "&font-family=" + $scope.submit.fontfamily;
                    }
                    $scope.url = $scope.url.replace('?&', '?');
                };


                /**
                 *
                 * @return authLogin
                 */

                $scope.image = function () {
                    $timeout(function () {
                        $routeapi.cancel();
                        $scope.imageloader = true;
                        $scope.geturl();
                        // console.log($scope.url);
                        return $routeapi.send($scope.url, {}, 'GET', $q.defer()).then(function (response) {
                            var _data;
                            _data = response.data;
                            $scope.urlimage = _data;
                            $scope.imageloader = false;
                        });
                    });
                };

                $scope.showMoreOptions = function (action) {
                    return $scope.moreoptions = !$scope.moreoptions;
                };

                return ImgholdrController;

            })();
            return new ImgholdrController();
        }
    ]);

}).call(this);
