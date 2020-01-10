$('#addToCart').click(function(e){
    e.preventDefault();
    let id = $(this).attr("data-id");
    $.ajax({
        url: "/add_cart/" + id,
        method: 'get',
        success: function(data){
            console.log(data);
            let qnt = $('#cnt').text(data[0].totalQty);
        }});
});


function remove(data) {
    let id = data.dataset.id;
    let price = data.dataset.price;
    console.log(id, price);
    $.ajax({
        url: "/remove_from_cart/" + id + "/" + price,
        method: 'get',
        success: function(data){
            console.log(data);
            let qnt = $('#cnt').text(data[0].totalQty);
        }});
}
