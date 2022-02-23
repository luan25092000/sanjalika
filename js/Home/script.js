$(document).ready(function() {
    $('#date-ticket').change(function () {
        var date = $(this).val();
        var baseUrl = window.location.origin;
        $.ajax({
            url: baseUrl + '/sanjalika/filter.php',
            type: 'POST',
            data: {
                date: date
            },
            success: function(res) {
                var html  = '';
                for (let x of JSON.parse(res)) {
                    html += 
                    `<div class="item-movie">
                        <div class="box-img">
                            <img src="${x.image}" alt="${x.name}">
                        </div>
                        <div class="box-name">
                            <span>${x.name} (${x.type})</span>

                        </div>
                        <div class="box-price">
                            <div class="price">
                                <span>$${x.price}</span>
                            </div>
                            <div class="box-amount">
                                <div class="number-input">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input class="quantity" min="0" name="qty[]" value="0" type="number">
                                    <input type="hidden" name="ids[]" value="${x.id}" />
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>`;
                }
                document.getElementById("box-ticket").innerHTML = html;
            }               
        });
    });
});

function addToCart()
{
    var qty_arr = $("input[name='qty[]']").map(function(){return $(this).val();}).get();
    var id_arr = $("input[name='ids[]']").map(function(){return $(this).val();}).get();
    var baseUrl = window.location.origin;
    $.ajax({
        url: baseUrl + '/sanjalika/add-to-cart.php',
        type: 'POST',
        data: {
            qty_arr: qty_arr,
            id_arr: id_arr
        },
        success: function(res) {
            if (res == true) {
                swal({
                    title: "Success",
                    text: "Thank you for your purchase!",
                    icon: "success",
                    type: "success",
                    timer: 3000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.href = window.location.href;
                });
            }
        }               
    });
}