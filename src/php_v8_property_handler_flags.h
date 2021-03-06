/*
 * This file is part of the pinepain/php-v8 PHP extension.
 *
 * Copyright (c) 2015-2017 Bogdan Padalko <pinepain@gmail.com>
 *
 * Licensed under the MIT license: http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source or visit
 * http://opensource.org/licenses/MIT
 */

#ifndef PHP_V8_PROPERTY_HANDLER_FLAGS_H
#define PHP_V8_PROPERTY_HANDLER_FLAGS_H

#include <v8.h>

extern "C" {
#include "php.h"

#ifdef ZTS
#include "TSRM.h"
#endif
}

extern zend_class_entry* php_v8_property_handler_flags_class_entry;

#define PHP_V8_PROPERTY_HANDLER_FLAGS ( 0                                   \
    | static_cast<long>(v8::PropertyHandlerFlags::kNone)                    \
    | static_cast<long>(v8::PropertyHandlerFlags::kAllCanRead)              \
    | static_cast<long>(v8::PropertyHandlerFlags::kNonMasking)              \
    | static_cast<long>(v8::PropertyHandlerFlags::kOnlyInterceptStrings)    \
)

PHP_MINIT_FUNCTION (php_v8_property_handler_flags);

#endif //PHP_V8_PROPERTY_HANDLER_FLAGS_H
