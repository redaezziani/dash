<script>
    const dropMenu= document.getElementById('drop-menu');
const userBar= document.getElementById('user-bar');

userBar.addEventListener('click', function(){
    dropMenu.classList.toggle('active');
})


var sidebar=document.getElementById("sidebar");
var closeSidebar=document.getElementById("close-sidebar");
var sidebarMenu=document.getElementById("sidebar-menu");

sidebar.addEventListener("click", function(){
    sidebarMenu.classList.contains("hidden") ? sidebarMenu.classList.remove("hidden") : sidebarMenu.classList.add("hidden");
    // lets add animate-slide-right

    if (sidebarMenu.classList.contains("animate-slide-right")) {
            sidebarMenu.classList.remove("animate-slide-right");
        } else {
            sidebarMenu.classList.add("animate-slide-right");
        }
})

closeSidebar.addEventListener("click", function(){
    sidebarMenu.classList.contains("hidden") ? sidebarMenu.classList.remove("hidden") : sidebarMenu.classList.add("hidden");
    // lets add animate-slide-right

    if (sidebarMenu.classList.contains("animate-slide-right")) {
           sidebarMenu.classList.remove("animate-slide-right");
       } else {
           sidebarMenu.classList.add("animate-slide-right");
       }
}
)
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
$(document).ready(function(){
    $(document).on('click','.edit',function(){
        var contrat_id= $(this).val();
        $('#edditModal').modal('show');
        $.ajax({
            type:"GET",
            url:"/edit-contrat/"+contrat_id,
            success: function (response){
                console.log(response);
                $('#contrat_id').val(response.data.id);
                $('#user-name').val(response.data.nom);
                $('#user-name').prop('disabled', false);
                $('#address').val(response.data.adress);
                $('#address').prop('disabled', false);
                $('#date').val(response.data.date);
                $('#date').prop('disabled', false);
                $('#contract-number').val(response.data.num_contrat);
                $('#contract_number').val(response.data.num_contrat);
                $('#fullprice').val(response.data.full_price);
                $('#fullprice').prop('disabled', false);
                $('#done-price').val(response.data.done_price);
                $('#done-price').prop('disabled', false);
                $('#credit').val(response.data.credit);
                $('#credit').prop('disabled', false);
                $('#credit_price').val(response.data.credit_price);
                $('#credit_price').prop('disabled', false);
                $('#project-description').val(response.data.desc);
                $('#project-description').prop('disabled', false);
                $('#acc').val(response.data.daccord);
                $('#acc').prop('disabled', false);
                $('#conditions').val(response.data.condition);
                $('#conditions').prop('disabled', false);
                $('#submit').prop('disabled', false);

            }
        })
    })
    $(document).on('click','.view',function(){
        var contrat_id= $(this).val();
        $('#edditModal').modal('show');
        $.ajax({
            type:"GET",
            url:"/edit-contrat/"+contrat_id,
            success: function (response){
                console.log(response);
                $('#contrat_id').val(response.data.id);
                $('#user-name').val(response.data.nom);
                $('#user-name').prop('disabled', true);
                $('#address').val(response.data.adress);
                $('#address').prop('disabled', true);
                $('#date').val(response.data.date);
                $('#date').prop('disabled', true);
                $('#contract-number').val(response.data.num_contrat);
                $('#contract_number').prop('disabled', true);
                $('#contract_number').val(response.data.num_contrat);
                $('#fullprice').val(response.data.full_price);
                $('#fullprice').prop('disabled', true);
                $('#done-price').val(response.data.done_price);
                $('#done-price').prop('disabled', true);
                $('#credit').val(response.data.credit);
                $('#credit').prop('disabled', true);
                $('#credit_price').val(response.data.credit_price);
                $('#credit_price').prop('disabled', true);
                $('#project-description').val(response.data.desc);
                $('#project-description').prop('disabled', true);
                $('#acc').val(response.data.daccord);
                $('#acc').prop('disabled', true);
                $('#conditions').val(response.data.condition);
                $('#conditions').prop('disabled', true);
                $('#submit').prop('disabled', true);

            }
        })
    })
})
$(document).ready(function(){
    $(document).on('click','.viewfacture',function(){
        var facture_id= $(this).val();
        $('#factureviewModal').modal('show');
        $.ajax({
            type:"GET",
            url:"/facture-modal/"+facture_id,
            success: function (response){
                console.log(response);
                 $('#facture_id').val(response.data.id);
                 $('#user-name').val(response.data.nom);
                 $('#user-name').prop('disabled', true);
                 $('#address').val(response.data.adress);
                 $('#address').prop('disabled', true);
                 $('#date').val(response.data.date);
                 $('#date').prop('disabled', true);
                 $('#phone').val(response.data.phone);
                 $('#phone').prop('disabled', true);
                 $('#ident').val(response.data.ident);
                 $('#ident').prop('disabled', true);
                 $('#desc').val(response.data.desc);
                 $('#desc').prop('disabled', true);
                 $('#full_price').val(response.data.full_price);
                 $('#full_price').prop('disabled', true);
                 $('#done_price').val(response.data.done_price);
                 $('#done_price').prop('disabled', true);
                 $('#credit_price').val(response.data.credit_price);
                 $('#credit_price').prop('disabled', true);
                 for (let i = 1; i <= 9; i++) {
                    // Set value and disable #desc_facture_i
                    $(`#desc_facture_${i}`).val(response.data[`desc_facture_${i}`]);
                    $(`#desc_facture_${i}`).prop('disabled', true);

                    // Set value and disable #qte_i
                    $(`#qte_${i}`).val(response.data[`qte_${i}`]);
                    $(`#qte_${i}`).prop('disabled', true);

                    // Set value and disable #price_qte_i
                    $(`#price_qte_${i}`).val(response.data[`price_qte_${i}`]);
                    $(`#price_qte_${i}`).prop('disabled', true);

                    // Set value and disable #total_qte_i
                    $(`#total_qte_${i}`).val(response.data[`total_qte_${i}`]);
                    $(`#total_qte_${i}`).prop('disabled', true);
                }
                $('#submit').prop('disabled', true);

            }
        })
    })

})
$(document).ready(function(){
    $(document).on('click','.editfacture',function(){
        var facture_id= $(this).val();
        $('#factureviewModal').modal('show');
        $.ajax({
            type:"GET",
            url:"/facture-modal/"+facture_id,
            success: function (response){
                console.log(response);
                $('#facture_id').val(response.data.id);
                 $('#user-name').val(response.data.nom);
                 $('#user-name').prop('disabled', false);
                 $('#address').val(response.data.adress);
                 $('#address').prop('disabled', false);
                 $('#date').val(response.data.date);
                 $('#date').prop('disabled', false);
                 $('#phone').val(response.data.phone);
                 $('#phone').prop('disabled', false);
                 $('#ident').val(response.data.ident);
                 $('#ident').prop('disabled', false);
                 $('#desc').val(response.data.desc);
                 $('#desc').prop('disabled', false);
                 $('#full_price').val(response.data.full_price);
                 $('#full_price').prop('disabled', false);
                 $('#done_price').val(response.data.done_price);
                 $('#done_price').prop('disabled', false);
                 $('#credit_price').val(response.data.credit_price);
                 $('#credit_price').prop('disabled', false);
                 for (let i = 1; i <= 9; i++) {
                    // Set value and disable #desc_facture_i
                    $(`#desc_facture_${i}`).val(response.data[`desc_facture_${i}`]);
                    $(`#desc_facture_${i}`).prop('disabled', false);

                    // Set value and disable #qte_i
                    $(`#qte_${i}`).val(response.data[`qte_${i}`]);
                    $(`#qte_${i}`).prop('disabled', false);

                    // Set value and disable #price_qte_i
                    $(`#price_qte_${i}`).val(response.data[`price_qte_${i}`]);
                    $(`#price_qte_${i}`).prop('disabled', false);

                    // Set value and disable #total_qte_i
                    $(`#total_qte_${i}`).val(response.data[`total_qte_${i}`]);
                    $(`#total_qte_${i}`).prop('disabled', false);
                }
                $('#submit').prop('disabled', false);

            }
        })
    })

})

</script>
