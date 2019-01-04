let rent_head = `<div class="container">
<div class="row">`;
let rent = ``;
let rent_foot = `</div>
</div>`;

$.ajax({
    type: 'GET',
    url: 'https://murmuring-forest-71544.herokuapp.com/api/electronics',
    success: function (data) {
        for (let i = 0; i < data.length; i++) {
            let name = data[i].name;
            let productImage = data[i].image;
            let description = data[i].description;
            let dailyRentalFee = data[i].dailyRentalFee;
            let numberInStock = data[i].numberInStock;



            let toAppend = `<!-- Rent Card -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">${name}</h5>
                        <img src="img/logo.png" class="card-details text-center img-fluid">
                        <hr>
                        <ul class="fa-ul">
                            <h6>Description</h6>
                            <li><span class="fa-li"><i class="fas fa-caret-right"></i></span>${description}</li>
                            <h6>Rental fee</h6>
                            <li><span class="fa-li"><i class="fas fa-caret-right"></i></span>${dailyRentalFee}</li>
                            <h6>In Stock</h6>
                            <li><span class="fa-li"><i class="fas fa-caret-right"></i></span>${numberInStock}</li>
                        </ul>
                        <a href="#" class="btn btn-block btn-primary text-uppercase">Rent Now</a>
                    </div>
                </div>
            </div>`;

            rent += toAppend;
            $('.content').html(rent_head + rent + rent_foot);

        }

    }
});