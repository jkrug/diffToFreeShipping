<?php
/*
 * Copyright (c) 2012 marmalade.de :: Joscha Krug
 *
 * Written by Jens Richter & Joscha Krug
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software
 * is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * ## Installation
 * ## Upload file to modules-Directory
 * ## module entry in Admin: oxbasket => marm_diff_oxbasket
 * ## Place the getter-Function in your template: [{$oxcmp_basket->getPriceUntilFreeShipping()}]
 *
 */

class marm_diff_oxbasket extends marm_diff_oxbasket_parent
{
    public function getPriceUntilFreeShipping()
    {
        if ( $this->_oProductsPriceList ) {
            $productsPrice = $this->_oProductsPriceList->getBruttoSum();
            $oDB = oxDb::getDb();
            $sQ = 'select OXPARAM from oxdelivery where OXADDSUM = 0';
            $freeShippingPrice = oxDb::getDb()->GetOne($sQ);
            $priceDiff = $freeShippingPrice - $productsPrice;
            if ($priceDiff < 0)
            {
                $priceDiff=0;
            }
            return oxLang::getInstance()->formatCurrency( $priceDiff, $this->getBasketCurrency() );
           
        }
        return null;
    }
}