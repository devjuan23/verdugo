<tr class="bg-transparent">
    <td>
        @if(isset($payment['name']))
            {{ ucwords($payment['name']) }}
        @else
            <p class="alert alert-custom">Necesitas tener <strong>nombre</strong> clave en tu configuración</p>
        @endif
    </td>
    <td class="hidden-xs">
        @if(isset($payment['description']))
            {{ $payment['description'] }}
        @endif
    </td>
    <td>
        <form action="{{ route('bank-transfer.index') }}">
            <input type="hidden" class="billing_address" name="billing_address" value="">
            <input type="hidden" class="rate" name="rate" value="">
            <input type="hidden" name="shipment_obj_id" value="{{ $shipment_object_id }}">
            <button type="submit" class="btn btn-orange pull-right">Pagar con {{ ucwords($payment['name']) }} <i class="fa fa-bank"></i></button>
        </form>
    </td>

</tr>
<script type="text/javascript">
    $(document).ready(function () {
        let billingAddressId = $('input[name="billing_address"]:checked').val();
        $('.billing_address').val(billingAddressId);

        $('input[name="billing_address"]').on('change', function () {
          billingAddressId = $('input[name="billing_address"]:checked').val();
          $('.billing_address').val(billingAddressId);
        });

        let courierRadioBtn = $('input[name="rate"]');
        courierRadioBtn.click(function () {
            $('.rate').val($(this).val())
        });
    });
</script>