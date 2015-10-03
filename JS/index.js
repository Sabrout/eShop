var grid = document.getElementById('goods');
var btn = document.querySelectorAll('#product button');
var btnLen = btn.length;
var delBtn;
var delBtnLen;
var j = 1;

var newP = function(newName, name, newPrice, price, prod, del, dollar) {
  newName.className = 'name';
  prod.appendChild(newName);
  newName.innerHTML = name;

  newPrice.id = 'nam';
  newPrice.className = 'price';
  prod.appendChild(newPrice);
  newPrice.innerHTML = dollar;

  del.className = 'del';
  prod.appendChild(del);
}
var upd = function() {
  delBtn = document.querySelectorAll('#all span');
  delBtnLen = delBtn.length;
  for (var n = 0; n < delBtnLen; n++) {
    delBtn[n].onclick = function() {

      var btnID = this.id.slice(3);
      var stock = document.getElementById('stock' + btnID).innerHTML;
      stock++;
      document.getElementById('stock' + btnID).innerHTML = stock;

      document.getElementById(btnID).disabled = false;

      for (var k = 0; true; k++)
      {
        if(!checkCookie(btnID + '-' + k))
        {
          setCookie(btnID + '-' + (k-1), btnID, -5);
          break;
        }
      }

      var total = document.getElementById('total').innerHTML;
      var namDollar = this.parentNode.children.namedItem('nam').innerHTML;
      var nam = namDollar.substr(1);
      document.getElementById('total').innerHTML = +total - +nam;

      this.parentNode.parentNode.removeChild(this.parentNode)
      var a = document.getElementById('all').childElementCount;

      if (a == 0) {
        cart.style.transform = 'translate(400px, 0)';
        grid.style.transform = 'translate(0px, 0)';
      }
    }
  }
}

for (var i = 0; i < btnLen; i++) {
  btn[i].onclick = function(e) {

    var stock = document.getElementById('stock' + this.id).innerHTML;
    
    if (stock == 0)
    {
      this.disabled = true;
      return;
    }

    stock--;
    document.getElementById('stock' + this.id).innerHTML = stock;
    
    
    var btnVal = this.innerHTML;
    var cart = document.getElementById('cart');
    var goods = document.getElementById('all');
    var newDiv = document.createElement('div');
    var newName = document.createElement('p');
    var newPrice = document.createElement('p');
    var del = document.createElement('span');
    del.id = 'del' + this.id;

    var product = this.parentNode.children;
    var info = product.namedItem('info').children;
    var text = info.namedItem('text').children;
    var name = text.namedItem('name').innerHTML;
    var price = text.namedItem('price').children;
    var nam = price.namedItem('num').innerHTML
    var dollar = '$' + nam;
    var total = document.getElementById('total').innerHTML;

    if (btnVal) {
      newDiv.id = 'product' + j;
      newDiv.className = 'item';
      goods.appendChild(newDiv);

      var prod = document.getElementById('product' + j);

      newP(newName, name, newPrice, price, prod, del, dollar);

      document.getElementById('total').innerHTML = +total + +nam;

      var a = cart.childElementCount;

      if (a > 1) {
        cart.style.transform = 'translate(0px, 0)';
        var trans = function() {
          var g = 0;
          prod.style.transform = 'translate(0px, 0)';

          if (g < 1) {
            setTimeout(trans, 0);
            g++
          }
        }
        setTimeout(trans, 100);
        grid.style.transform = 'translate(-18.5%, 0)';

      }
    }

    for (var k = 0; true; k++)
    {
      if(!checkCookie(this.id + '-' + k))
      {
        setCookie(this.id + '-' + k, this.id, 5);
        break;
      }
    }

    j++;
    upd();
  }
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

function checkCookie(name)
{
  var cookieData=getCookie(name);
    if (cookieData!="") {
        return true;
    }else{
        return false;
    }
}

function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      var eqPos = cookie.indexOf("=");
      var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}