$(function () {
    $('input[name="role"]').on('change', function () {
        if ($('input[name="role"]:checked').val() == 'Seller') {
            $('.brand-input').html(
                `
                <div class="form-label-group">
                    <input type="text" id="brand_name" name="brand_name" class="form-control" placeholder="Brand Name">
                    <label for="brand_name">Brand Name</label>
                </div>
                <div class="form-label-group">
                    <textarea name="brand_description" class="form-control" id="brand_description" placeholder="Brand Description"></textarea>
                    <label for="brand_description">Brand Description</label>
                </div>
            `
            )
        } else {
            $('.brand-input').html(``)
        }
    })
})