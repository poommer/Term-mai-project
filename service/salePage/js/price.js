function price(proid){
   const btnn = proid;
   let price = btnn.getAttribute("data-price");
   document.FrmSale.price.value = price;
    
   const n = proid;
   let proName = document.getElementById('name-pro');
   let name = n.getAttribute('data-name');
   document.FrmSale.namepro.value = name;
   proName.innerText = name;
}

function sumprice(){
   let price = document.FrmSale.price.value;
   let qty = document.FrmSale.qty.value;
   let totail = price * qty;
   document.FrmSale.QTYtotail.value = totail;
}



function price_totail(){
   let sump = document.getElementById('sum');
   let qty = document.getElementById('qty-pro');
   let price = document.getElementById('price-pro');
   sump.innerText = document.FrmSale.QTYtotail.value;
   qty.innerText = document.FrmSale.qty.value;
   price.innerText = document.FrmSale.price.value;



}

function ClickToPay(){
   const formname = document.getElementById("frmPay");
    document.formname.setAttribute("action", "pay.php");
   formname.innerText = getAttribute("action");
}