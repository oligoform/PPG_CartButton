[{$smarty.block.parent}]

[{* RoxIVE Erweiterung, Lieferinfo in Bild anzeigen *}]

<style type="text/css">
    .ppgtext {   /* erbt von der vorherigen div Klasse */
        background-color: red ;
        position: relative;
        float: left;
        width: 100% ;
        z-index: 2;
        font-size:  16px;
        font-weight: bold;
        text-align: center ;
        line-height: 4em;
        
    }
    
</style>

[{* eigener oxhasright ident zum anzeigen der nicht kaufbar Meldung*}]

[{oxhasrights ident="PPGKEINVERSAND"}]
 
     <span class="ppgtext">[{oxmultilang ident="PPG_SHOWKART_PRODUKT_NICHT_KAUFBAR"}]</span>

[{/oxhasrights}]

