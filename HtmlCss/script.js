var ishEven = function(number) {
  // Your code goes here!

  var nanValue = number;
  //if(nanValue != nanValue) // Returns true!
    //alert('nanValue is NaN');.........................................................>!!!!!
  var ret = isNaN(number);
  
  console.log(ret);
  
  if (nanValue != nanValue) {
    // Do something..........................................................................>
    return "It is NaN";

  } else if (ret == true){
    // ggggggggggggggggggggggg..............................................................>
    return "It is string";

  } 
  else {    // Otherwise
    // Do a third thing......................................................>
    return "It's not string";
  }

  
}

isEven(NaN);