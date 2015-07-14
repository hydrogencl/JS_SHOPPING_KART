<!DOCTYPE html>
<html>
<body>

<h1>Welcome to buy</h1>
<p></p>
<p>Some more text.</p>

    <form method="get">
     Name :<input type = "text" name= "name" value = "<?php echo $_GET["name"];?>">
     Email :<input type = "number" name = "salary" value = "<?php echo $_GET["email"]?>">
     <input type = "submit" value = "submit">

     <input type="checkbox" name="checkbox" id="checkbox_id" value="value"> 
    </form>
    <label for="checkbox_id">Text</label>
    <input type="checkbox" name="foo" value="baz" id="foo_baz" for"checkbox_id"> 好吧~

    <p id="demo"> TRY</p>
     
    <button onclick="act(['dm a1','dm a2','dm a3','dm a4'],[90,90,90,90])">Class 1</button>
    <button onclick="act(['dm b1','dm b2','bh b3','dm b4'],[100,100,100,100])">Class 2</button>
    <button onclick="act(['pa c1','ca c2','da c3','cc c4','qq c5'],[130,260,200,120,430])">class 3</button>
    <button onclick="act(['d1','d2'],[41,42])">d</button>
    <button onclick="remove1()">Cancel last</button>
    <br>
    <button onclick="show_all()">Check out</button>
    <br>
    <p> <select id="act_a"> act a 
         <option>Apple</option>
         <option>Pear</option>
         <option>Banana</option>
         <option>Orange</option>
       </select> </p>
    <p> =========</p>
    <p> Processes<a id="body1"></a></p>
    <p> Cancels<a id="body2"></a></p>
    <p> Clicks: <a id="clicks">0</a></p>

    <p> =========</p>
    <p id="result_all"> result: </p>
    <p> value: <a id="total_value">  </a> </p>
  
    <script type="text/javascript">
    var clicks = 0;

    function show_test(){
      ar = ["as ","a ","dog"]
      test = "";
      for (i = 0; i < ar.length; i++) {
        test +=ar[i];
        }
      document.getElementById("result_all").innerHTML = test;
    }
    function show_all(){
      //var lst_btn = document.getElementByName("myAct"); 
      //var text = 0 ;
      //alert (lst_btn);
      //for (i = 1; i < lst_btn.length; i++) {
      //  text += 1;
      // }
      var ids = [];
      var value = 0;
      var all = document.getElementById("body1").children;
      alert(all);
      for (var i = 0, len = all.length ; i < len; i++) {
         //children[i].className = 'new-class'; //change child class name.
         ids.push(all[i].id); //get child id.
         value += new Number (all[i].value);
         }
      alert(ids);
      document.getElementById("result_all").innerHTML = ids;
      document.getElementById("total_value").innerHTML = value;
      }
    function act(arr, arr_v) {
       var array = arr;
       var array_v = arr_v;
       var num_parent = document.getElementsByName("myAct");
       var parent1 = document.getElementById("body1");
       var parent2 = document.getElementById("body2");
       var list_act = document.createElement("select");
       var btn_actc = document.createElement("button");
       btn_actc.setAttribute("id", "btn_act"+num_parent.length);
       btn_actc.setAttribute("name", "btn_actc");
       btn_actc.setAttribute("text", "cancel");
       list_act.setAttribute("id", "select_act"+num_parent.length);
       list_act.setAttribute("name", "myAct");
       for (i = 0; i < arr.length; i++) { 
         var opt_act = document.createElement("option");
         opt_act.text = arr[i];
         opt_act.value = arr_v[i];
         list_act.add(opt_act);
         }

       btn_actc.onclick = function() {
         var list = document.getElementById("body1");
         list.removeChild(list.childNodes[num_parent.length]);
         };
       //alert(list_act.id + "/" +list_act.value + "/" + num_parent.length );
       parent1.appendChild(list_act);
       parent1.appendChild(document.createElement("br"));
       //parent2.appendChild(btn_actc);
       clicks += 1;
       }
    function remove1() {
       for (var stp = 0 ; stp<2 ; stp++) {
         var lst_btn = document.getElementById("body1"); 
         var lstlast = lst_btn.length;
         lst_btn.removeChild(lst_btn.lastChild);
         }
       }
    </script>
</FORM>


</body>
</html>
