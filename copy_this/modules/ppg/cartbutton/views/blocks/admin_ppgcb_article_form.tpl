[{$smarty.block.parent}]
<tr>
    <td class="edittext" width="140">
        [{ oxmultilang ident="PPG_SHOWKART_ADMIN_NURGRUPPE" }]
    </td>
    <td class="edittext">
        <input type="hidden" name="editval[oxarticles__ppghiden]" value='0'>
        <input class="edittext" type="checkbox" name="editval[oxarticles__ppghiden]" value='1' [{if $edit->oxarticles__ppghiden->value == 1}]checked[{/if}]>
        [{ oxinputhelp ident="PPG_SHOWKART_ADMIN_NURGRUPPE_HELP" }]
    </td>
</tr>
