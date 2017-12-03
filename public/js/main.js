
var counter = 0;
var countItems = localStorage.getItem('products_counter');
var Shop = (function(){
  function Shop(){

  }
  Shop.prototype.addCart = function(self,product_id){
      $('.cart-counter').html(counter);
      $.ajax({
        method:"GET",
        url:'products/add-to-cart/'+product_id,
        success:function(data){

        }
      });
  };
  Shop.prototype.showCart = function(){
    
  };

  Shop.prototype.nextStepPayment = function(step){
    if(step == 'data'){
      $('.payment-method').fadeOut(function(){
          $('.user-data').fadeIn();
      });
      $('#btnStepPayment').attr('onclick','shop.nextStepPayment("final")');
    }else if(step == 'final'){
      $.post('save-order',$('#userData').serialize())
      .done(function(data){

      });

    }
  }
  return Shop;
})();
var shop  = new Shop();
