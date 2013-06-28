[{$smarty.block.parent}]
[{if $oxcmp_basket->getPriceUntilFreeShipping() > 0 }]
<p class="totals">
   Nur noch <strong>[{$oxcmp_basket->getPriceUntilFreeShipping()}]
   [{ $currency->sign}]</strong>
   und wir liefern Ihnen Ihre Bestellung kostenlos.
</p>
[{else}]
<p class="totals">
    Versandkostenfreie Lieferung!
</p>
[{/if}]