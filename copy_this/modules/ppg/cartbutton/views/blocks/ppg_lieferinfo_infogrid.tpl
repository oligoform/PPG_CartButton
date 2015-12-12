[{$smarty.block.parent}]

[{* RoxIVE Erweiterung, Lieferinfo in Bild anzeigen *}]

<style type="text/css">
    .ppgtextinfo {   /* erbt von der vorherigen div Klasse */
        background-color: red ;
        position: relative;
        float: left;
        width: 100% ;
        z-index: 2;
        font-size:  12px;
        font-weight: bold;
        text-align: center ;
        line-height: 2em;
        
    }
    
</style>

[{* eigener oxhasright ident zum anzeigen der nicht kaufbar Meldung*}]

[{oxhasrights ident="PPGKEINVERSAND"}]
 
     <span class="ppgtextinfo">[{oxmultilang ident="PPG_SHOWKART_PRODUKT_NICHT_KAUFBAR_INFO"}]</span>

[{/oxhasrights}]

