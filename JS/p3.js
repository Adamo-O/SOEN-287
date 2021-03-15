function getData(){
    let itemsArray =[];
    itemsArray = JSON.parse(sessionStorage.getItem('items'));
    var itemName = document.title;
    var price = document.getElementById("price").innerHTML;
    var quantity = document.getElementById("quantity").value;
    if (quantity == "") {
        quantity = 0;
    }
    var realPrice = parseFloat(price.slice(10));
    
    var totalPrice = realPrice * quantity;
    let itemData =[itemName,quantity,price,totalPrice];
    if(itemsArray ===null){
        itemsArray = [itemData]
    }
    else{
        for(let i = 0; i<itemsArray.length;i++){
            if(itemsArray[i][0] === itemName){
                itemsArray[i][1] = parseInt(quantity) + parseInt(itemsArray[i][1]);
                itemsArray[i][3] = (parseFloat(totalPrice) + parseFloat(itemsArray[i][3])).toFixed(2);
                break; 
            }
            else if(i==itemsArray.length-1){
                itemsArray.push(itemData);break;
            }
        }
    }
    sessionStorage.setItem('items', JSON.stringify(itemsArray));
}
function addRows(){
    var table = document.getElementById("table1");
    let arr = JSON.parse(sessionStorage.getItem('items'));
    for(let i =0;i<arr.length;i++){
        var button = document.createElement("INPUT");
        button.setAttribute("type","button");
        button.setAttribute("value","x" );
        var row = table.insertRow(i+1);
        var cell1 = row.insertCell(0);
        cell1.innerHTML=arr[i][0];
        var cell2 = row.insertCell(1);
        cell2.innerHTML = arr[i][1];
        var cell3 = row.insertCell(2);
        cell3.innerHTML = arr[i][2];
        var cell4 = row.insertCell(3);
        cell4.innerHTML = arr[i][3];
        row.insertCell(4).appendChild(button);
        button.onclick = function(){
            document.getElementById("table1").deleteRow(i+1);
            if(arr.length==1){
                arr = null;
            }
            else{
                arr.splice(i, 1);
            }
            sessionStorage.setItem('items', JSON.stringify(arr));
        };
        var numberOfRows = table1.rows.length;
        document.getElementById("numberOfItems").innerHTML = (numberOfRows -1);
        var orderTotal;
        for(let j =0;j<arr.length;i++){
            orderTotal = parseFloat(orderTotal) + parseFloat(arr[j][3]); 
        }
        document.getElementById("orderTotal").innerHTML = orderTotal;
        var qst =9.975/100 * orderTotal;
        document.getElementById("qst") = qst;
        var gst =5/100 * orderTotal;
        document.getElementById("gst") = gst;
        var total = orderTotal + qst + gst;
        document.getElementById("total") = total; 
    }
}

 
