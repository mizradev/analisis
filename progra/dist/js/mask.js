/ **
 * jquery.mask.js
 * @version: v1.14.10
 * @ autor: Igor Escobar
 * *
 * Creado por Igor Escobar el 10/03/2012. Informe cualquier error en http://blog.igorescobar.com
 * *
 * Copyright (c) 2012 Igor Escobar http://blog.igorescobar.com
 * *
 * La licencia MIT (http://www.opensource.org/licenses/mit-license.php)
 * *
 * El permiso se otorga por la presente, de forma gratuita, a cualquier persona
 * obtener una copia de este software y la documentación asociada
 * archivos (el "Software"), para tratar el Software sin
 * restricción, incluidos, entre otros, los derechos de uso,
 * copiar, modificar, fusionar, publicar, distribuir, sublicenciar y / o vender
 * copias del Software, y para permitir personas a quienes
 * El software se proporciona para hacerlo, sujeto a lo siguiente
 * condiciones:
 * *
 * El aviso de copyright anterior y este aviso de permiso serán
 * incluido en todas las copias o partes sustanciales del Software.
 * *
 * EL SOFTWARE SE PROPORCIONA "TAL CUAL", SIN GARANTÍA DE NINGÚN TIPO,
 * EXPRESO O IMPLÍCITO, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS
 * DE COMERCIABILIDAD, APTITUD PARA UN PROPÓSITO EN PARTICULAR Y
 * NO INFRACCIÓN. EN NINGÚN CASO LOS AUTORES O LOS DERECHOS DE AUTOR
 * LOS TITULARES SERÁN RESPONSABLES POR CUALQUIER RECLAMACIÓN, DAÑO U OTRA RESPONSABILIDAD,
 * EN UNA ACCIÓN DE CONTRATO, TORTURA O DE OTRA MANERA, QUE SURJA
 * DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE O EL USO O
 * OTRAS OFERTAS EN EL SOFTWARE.
 * /

/ * jshint laxbreak: verdadero * /
/ * jshint maxcomplexity: 17 * /
/ * definición global * /

'uso estricto';

// Patrones UMD (Universal Module Definition) para módulos JavaScript que funcionan en todas partes.
// https://github.com/umdjs/umd/blob/master/jqueryPluginCommonjs.js
(función (fábrica, jQuery, Zepto) {

    if (typeof define === 'función' && define.amd) {
        define (['jquery'], fábrica);
    } else if (typeof exportaciones === 'objeto') {
        module.exports = factory (require ('jquery'));
    } más {
        fábrica (jQuery || Zepto);
    }

} (función ($) {

    var Máscara = función (el, máscara, opciones) {

        var p = {
            inválido: [],
            getCaret: function () {
                tratar {
                    var sel,
                        pos = 0,
                        ctrl = el.get (0),
                        dSel = document.selection,
                        cSelStart = ctrl.selectionStart;

                    // Soporte de IE
                    if (dSel && navigator.appVersion.indexOf ('MSIE 10') === -1) {
                        sel = dSel.createRange ();
                        sel.moveStart ('personaje', -p.val (). longitud);
                        pos = sel.text.length;
                    }
                    // soporte de Firefox
                    si no (cSelStart || cSelStart === '0') {
                        pos = cSelStart;
                    }

                    volver pos;
                } captura (e) {}
            },
            setCaret: function (pos) {
                tratar {
                    if (el.is (': foco')) {
                        rango var, ctrl = el.get (0);

                        // Firefox, WebKit, etc.
                        if (ctrl.setSelectionRange) {
                            ctrl.setSelectionRange (pos, pos);
                        } más {// IE
                            rango = ctrl.createTextRange ();
                            rango.collapse (verdadero);
                            range.moveEnd ('personaje', pos);
                            range.moveStart ('personaje', pos);
                            range.select ();
                        }
                    }
                } captura (e) {}
            },
            eventos: función () {
                el
                .on ('keydown.mask', función (e) {
                    el.data ('código-clave de máscara', e.keyCode || e.which);
                    el.data ('mask-previus-value', el.val ());
                })
                .on ($. jMaskGlobals.useInput? 'input.mask': 'keyup.mask', p.behaviour)
                .on ('paste.mask drop.mask', function () {
                    setTimeout (function () {
                        el.keydown (). keyup ();
                    }, 100);
                })
                .on ('change.mask', function () {
                    el.data ('cambiado', verdadero);
                })
                .on ('blur.mask', function () {
                    if (oldValue! == p.val () &&! el.data ('cambiado')) {
                        el.trigger ('cambio');
                    }
                    el.data ('cambiado', falso);
                })
                // es muy importante que esta devolución de llamada permanezca en esta posición
                // otherwhise oldValue va a funcionar con errores
                .on ('blur.mask', function () {
                    valor antiguo = p.val ();
                })
                // selecciona todo el texto en foco
                .on ('focus.mask', función (e) {
                    if (options.selectOnFocus === true) {
                        $ (e.target) .select ();
                    }
                })
                // borra el valor si no completa la máscara
                .on ('focusout.mask', function () {
                    if (options.clearIfNotMatch &&! regexMask.test (p.val ())) {
                       p.val ('');
                   }
                });
            },
            getRegexMask: function () {
                var maskChunks = [], traducción, patrón, opcional, recursivo, oRecursivo, r;

                for (var i = 0; i <mask.length; i ++) {
                    traducción = jMask.translation [mask.charAt (i)];

                    if (traducción) {

                        pattern = translation.pattern.toString (). replace (/. {1} $ | ^. {1} / g, '');
                        opcional = traducción.opcional;
                        recursivo = traducción.recursivo;

                        si (recursivo) {
                            maskChunks.push (mask.charAt (i));
                            oRecursive = {digit: mask.charAt (i), pattern: pattern};
                        } más {
                            maskChunks.push (! opcional &&! recursivo? patrón: (patrón + '?'));
                        }

                    } más {
                        maskChunks.push (mask.charAt (i) .replace (/ [- \ / \\ ^ $ * + ?. () | [\] {}] / g, '\\ $ &'));
                    }
                }

                r = maskChunks.join ('');

                if (oRecursive) {
                    r = r.replace (nuevo RegExp ('(' + oRecursive.digit + '(. *' + oRecursive.digit + ')?)'), '($ 1)?')
                         .replace (nuevo RegExp (oRecursive.digit, 'g'), oRecursive.pattern);
                }

                devolver nuevo RegExp (r);
            },
            destroyEvents: function () {
                el.off (['input', 'keydown', 'keyup', 'paste', 'drop', 'blur', 'focusout', ''] .join ('. mask'));
            },
            val: función (v) {
                var isInput = el.is ('input'),
                    método = isInput? 'val': 'texto',
                    r;

                if (argumentos.length> 0) {
                    if (el [método] ()! == v) {
                        el [método] (v);
                    }
                    r = el;
                } más {
                    r = el [método] ();
                }

                volver r;
            },
            CalculateCaretPosition: function (caretPos, newVal) {
                var newValL = newVal.length,
                    oValue = el.data ('mask-previus-value') || '',
                    oValueL = oValue.length;

                // casos extremos al borrar dígitos
                if (el.data ('mask-keycode') === 8 && oValue! == newVal) {
                    caretPos = caretPos - (newVal.slice (0, caretPos) .length - oValue.slice (0, caretPos) .length);

                // casos extremos al escribir nuevos dígitos
                } else if (oValue! == newVal) {
                    // si el cursor está al final, mantenlo allí
                    if (caretPos> = oValueL) {
                        caretPos = newValL;
                    } más {
                        caretPos = caretPos + (newVal.slice (0, caretPos) .length - oValue.slice (0, caretPos) .length);
                    }
                }

                volver caretPos;
            },
            comportamiento: función (e) {
                e = e || window.event;
                p.invalid = [];

                var keyCode = el.data ('mask-keycode');

                if ($ .inArray (keyCode, jMask.byPassKeys) === -1) {
                    var newVal = p.getMasked (),
                        caretPos = p.getCaret ();

                    setTimeout (function (caretPos, newVal) {
                      p.setCaret (p.calculateCaretPosition (caretPos, newVal));
                    }, 10, caretPos, newVal);

                    p.val (newVal);
                    p.setCaret (caretPos);
                    devolver p.callbacks (e);
                }
            },
            getMasked: function (skipMaskChars, val) {
                var buf = [],
                    valor = val === indefinido? p.val (): val + '',
                    m = 0, maskLen = mask.length,
                    v = 0, valLen = value.length,
                    offset = 1, addMethod = 'push',
                    resetPos = -1,
                    lastMaskChar,
                    cheque;

                if (options.reverse) {
                    addMethod = 'unshift';
                    desplazamiento = -1;
                    lastMaskChar = 0;
                    m = máscaraLen - 1;
                    v = valLen - 1;
                    check = function () {
                        devuelve m> -1 && v> -1;
                    };
                } más {
                    lastMaskChar = maskLen - 1;
                    check = function () {
                        return m <máscaraLen && v <valLen;
                    };
                }

                var lastUntranslatedMaskChar;
                while (marcar ()) {
                    var maskDigit = mask.charAt (m),
                        valDigit = value.charAt (v),
                        traducción = jMask.translation [maskDigit];

                    if (traducción) {
                        if (valDigit.match (translation.pattern)) {
                            buf [addMethod] (valDigit);
                             if (translation.recursive) {
                                if (resetPos === -1) {
                                    resetPos = m;
                                } else if (m === lastMaskChar) {
                                    m = resetPos - desplazamiento;
                                }

                                if (lastMaskChar === resetPos) {
                                    m - = desplazamiento;
                                }
                            }
                            m + = desplazamiento;
                        } else if (valDigit === lastUntranslatedMaskChar) {
                            // coincidió con el último carácter de máscara sin traducir (sin formato) que encontramos
                            // probablemente una inserción desplaza el carácter de máscara desde la última entrada; otoño
                            // a través y solo incrementa v
                            lastUntranslatedMaskChar = undefined;
                        } else if (translation.optional) {
                            m + = desplazamiento;
                            v - = desplazamiento;
                        } else if (translation.fallback) {
                            buf [addMethod] (traducción. retroceso);
                            m + = desplazamiento;
                            v - = desplazamiento;
                        } más {
                          p.invalid.push ({p: v, v: valDigit, e: translation.pattern});
                        }
                        v + = desplazamiento;
                    } más {
                        if (! skipMaskChars) {
                            buf [addMethod] (maskDigit);
                        }

                        if (valDigit === maskDigit) {
                            v + = desplazamiento;
                        } más {
                            lastUntranslatedMaskChar = maskDigit;
                        }

                        m + = desplazamiento;
                    }
                }

                var lastMaskCharDigit = mask.charAt (lastMaskChar);
                if (maskLen === valLen + 1 &&! jMask.translation [lastMaskCharDigit]) {
                    buf.push (lastMaskCharDigit);
                }

                return buf.join ('');
            },
            devoluciones de llamada: función (e) {
                var val = p.val (),
                    cambiado = val! == oldValue,
                    defaultArgs = [val, e, el, opciones],
                    callback = function (nombre, criterios, argumentos) {
                        if (tipo de opciones [nombre] === 'función' && criterios) {
                            opciones [nombre] .apply (esto, argumentos);
                        }
                    };

                devolución de llamada ('onChange', cambiado === verdadero, defaultArgs);
                devolución de llamada ('onKeyPress', cambiado === verdadero, defaultArgs);
                devolución de llamada ('onComplete', val.length === mask.length, defaultArgs);
                devolución de llamada ('onInvalid', p.invalid.length> 0, [val, e, el, p.invalid, options]);
            }
        };

        el = $ (el);
        var jMask = this, oldValue = p.val (), regexMask;

        mask = typeof mask === 'función'? mask (p.val (), undefined, el, options): máscara;

        // métodos públicos
        jMask.mask = máscara;
        jMask.options = opciones;
        jMask.remove = function () {
            var caret = p.getCaret ();
            p.destroyEvents ();
            p.val (jMask.getCleanVal ());
            p.setCaret (caret);
            volver el;
        };

        // obtener valor sin máscara
        jMask.getCleanVal = function () {
           return p.getMasked (verdadero);
        };

        // obtener valor enmascarado sin que el valor esté en la entrada o elemento
        jMask.getMaskedVal = function (val) {
           return p.getMasked (falso, val);
        };

       jMask.init = function (onlyMask) {
            onlyMask = onlyMask || falso;
            opciones = opciones || {};

            jMask.clearIfNotMatch = $ .jMaskGlobals.clearIfNotMatch;
            jMask.byPassKeys = $ .jMaskGlobals.byPassKeys;
            jMask.translation = $ .extend ({}, $ .jMaskGlobals.translation, options.translation);

            jMask = $ .extend (verdadero, {}, jMask, opciones);

            regexMask = p.getRegexMask ();

            if (onlyMask) {
                p.eventos ();
                p.val (p.getMasked ());
            } más {
                if (options.placeholder) {
                    el.attr ('marcador de posición', opciones.marcador de posición);
                }

                // esto es necesario, de lo contrario si el usuario envía el formulario
                // y luego presione el botón "Atrás", el autocompletado se borrará
                // los datos. Funciona bien en IE9 +, FF, Opera, Safari.
                if (el.data ('máscara')) {
                  el.attr ('autocompletar', 'apagado');
                }

                // detecta si es necesario, deja que el usuario escriba libremente.
                // for es mucho más rápido que forEach.
                for (var i = 0, maxlength = true; i <mask.length; i ++) {
                    traducción var = jMask.translation [mask.charAt (i)];
                    if (traducción && translation.recursive) {
                        maxlength = false;
                        rotura;
                    }
                }

                if (maxlength) {
                    el.attr ('maxlength', mask.length);
                }

                p.destroyEvents ();
                p.eventos ();

                var caret = p.getCaret ();
                p.val (p.getMasked ());
                p.setCaret (caret);
            }
        };

        jMask.init (! el.is ('input'));
    };

    $ .maskWatchers = {};
    var HTMLAttributes = function () {
        entrada var = $ (esto),
            opciones = {},
            prefijo = 'máscara de datos-',
            máscara = input.attr ('máscara de datos');

        if (input.attr (prefijo + 'reverse')) {
            options.reverse = true;
        }

        if (input.attr (prefijo + 'clearifnotmatch')) {
            options.clearIfNotMatch = true;
        }

        if (input.attr (prefijo + 'selectonfocus') === 'verdadero') {
           options.selectOnFocus = true;
        }

        if (notSameMaskObject (input, mask, options)) {
            return input.data ('máscara', nueva máscara (esto, máscara, opciones));
        }
    },
    notSameMaskObject = function (campo, máscara, opciones) {
        opciones = opciones || {};
        var maskObject = $ (campo) .data ('máscara'),
            stringify = JSON.stringify,
            valor = $ (campo) .val () || $ (campo) .text ();
        tratar {
            if (typeof mask === 'function') {
                máscara = máscara (valor);
            }
            return typeof maskObject! == 'objeto' || stringify (maskObject.options)! == stringify (opciones) || maskObject.mask! == máscara;
        } captura (e) {}
    },
    eventSupported = function (eventName) {
        var el = document.createElement ('div'), isSupported;

        eventName = 'on' + eventName;
        isSupported = (eventName en el);

        if (! isSupported) {
            el.setAttribute (eventName, 'return;');
            isSupported = typeof el [eventName] === 'función';
        }
        el = nulo;

        El retorno es compatible;
    };

    $ .fn.mask = función (máscara, opciones) {
        opciones = opciones || {};
        var selector = this.selector,
            globales = $ .jMaskGlobals,
            intervalo = globals.watchInterval,
            watchInputs = options.watchInputs || globals.watchInputs,
            maskFunction = function () {
                if (notSameMaskObject (this, mask, options)) {
                    return $ (this) .data ('máscara', nueva máscara (esto, máscara, opciones));
                }
            };

        $ (this) .each (maskFunction);

        if (selector && selector! == '' && watchInputs) {
            clearInterval ($. maskWatchers [selector]);
            $ .maskWatchers [selector] = setInterval (function () {
                $ (documento) .find (selector) .each (máscaraFunción);
            }, intervalo);
        }
        devuelve esto;
    };

    $ .fn.masked = function (val) {
        devuelve this.data ('máscara'). getMaskedVal (val);
    };

    $ .fn.unmask = function () {
        clearInterval ($. maskWatchers [this.selector]);
        eliminar $ .maskWatchers [this.selector];
        devuelve this.each (function () {
            var dataMask = $ (this) .data ('máscara');
            if (dataMask) {
                dataMask.remove (). removeData ('máscara');
            }
        });
    };

    $ .fn.cleanVal = function () {
        devuelve this.data ('máscara'). getCleanVal ();
    };

    $ .applyDataMask = función (selector) {
        selector = selector || $ .jMaskGlobals.maskElements;
        var $ selector = (selector instanceof $)? selector: $ (selector);
        $ selector.filter ($. jMaskGlobals.dataMaskAttr) .each (HTMLAttributes);
    };

    var globals = {
        maskElements: 'input, td, span, div',
        dataMaskAttr: '* [máscara de datos]',
        dataMask: verdadero,
        watchInterval: 300,
        watchInputs: verdadero,
        // las versiones antiguas de Chrome no funcionan muy bien con el evento de entrada
        useInput:! / Chrome \ / [2-4] [0-9] | SamsungBrowser / .test (window.navigator.userAgent) && eventSupported ('input'),
        watchDataMask: falso,
        byPassKeys: [9, 16, 17, 18, 36, 37, 38, 39, 40, 91],
        Traducción: {
            '0': {patrón: / \ d /},
            '9': {patrón: / \ d /, opcional: verdadero},
            '#': {patrón: / \ d /, recursivo: verdadero},
            'A': {patrón: / [a-zA-Z0-9] /},
            'S': {patrón: / [a-zA-Z] /}
        }
    };

    $ .jMaskGlobals = $ .jMaskGlobals || {};
    globales = $ .jMaskGlobals = $ .extend (verdadero, {}, globales, $ .jMaskGlobals);

    // buscando entradas con atributo de máscara de datos
    if (globals.dataMask) {
        $ .applyDataMask ();
    }

    setInterval (function () {
        if ($ .jMaskGlobals.watchDataMask) {
            $ .applyDataMask ();
        }
    }, globals.watchInterval);
}, window.jQuery, window.Zepto));