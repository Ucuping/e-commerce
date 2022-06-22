<div class="modal fade text-left" id="payment-modal" role="dialog" aria-labelledby="payment-modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="payment-modal">Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="paymentForm" action="{{ route('checkouts.pay') }}" data-success-callback="{{ route('home') }}" method="POST" data-toggle="pay">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="payment_method">Payment Method <span class="text-danger">*</span></label>
                        <select name="payment_method" id="payment_method" class="form-control">
                            <option value="transfer">Transfer</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="delivery_method">Delivery Method <span class="text-danger">*</span></label>
                        <select name="delivery_method" id="delivery_method" class="form-control">
                            <option value="non-cod">Non COD</option>
                            <option value="cod">COD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pay <span class="text-danger">*</span></label>
                        <input type="number" name="pay" id="pay" class="form-control" placeholder="Pay">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary waves-effect waves-light pay-button" data-toggle="pay-button" type="submit"><i
                            class="feather icon-send"></i>
                        Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>