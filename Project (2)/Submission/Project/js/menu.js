
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("p");
      var found = false;
      for (var j = 0; j < a.length; j++) {
        if (a[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
          found = true;
          break;
        }
      }
      if (found) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }
  $(function() {
    // Define the runEffect function
    function runEffect() {
        // Generate a random effect
        var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
        var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

        // Run the effect
        $("#effect").toggle(selectedEffect, 1000);
    };

    // Set effect from button click
    $("#description-button").on("click", function() {
        runEffect();
    });
    function runEffect1() {
      // Generate a random effect
      var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
      var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

      // Run the effect
      $("#effect1").toggle(selectedEffect, 1000);
  };

  // Set effect from button click
  $("#description-button1").on("click", function() {
      runEffect1();
  });
  function runEffect2() {
    // Generate a random effect
    var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
    var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

    // Run the effect
    $("#effect2").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button2").on("click", function() {
    runEffect2();
});
function runEffect3() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect3").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button3").on("click", function() {
  runEffect3();
});
function runEffect4() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect4").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button4").on("click", function() {
  runEffect4();
});
function runEffect5() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect5").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button5").on("click", function() {
  runEffect5();
});
function runEffect6() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect6").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button6").on("click", function() {
  runEffect6();
});
function runEffect7() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect7").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button7").on("click", function() {
  runEffect7();
});
function runEffect8() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect8").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button8").on("click", function() {
  runEffect8();
});
function runEffect9() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button9").on("click", function() {
  runEffect9();
});
function runEffect10() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect10").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button10").on("click", function() {
  runEffect10();
});
function runEffect11() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect11").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button11").on("click", function() {
  runEffect11();
});
function runEffect12() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect12").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button12").on("click", function() {
  runEffect12();
});  
function runEffect13() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect13").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button13").on("click", function() {
  runEffect13();
});  
function runEffect14() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect14").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button14").on("click", function() {
  runEffect14();
}); 
function runEffect15() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect15").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button15").on("click", function() {
  runEffect15();

}); 
function runEffect16() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect16").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button16").on("click", function() {
  runEffect16();
}); 
function runEffect17() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect17").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button17").on("click", function() {
  runEffect17();
}); 
function runEffect18() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect18").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button18").on("click", function() {
  runEffect18();
}); 
function runEffect19() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect19").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button19").on("click", function() {
  runEffect19();
}); 
function runEffect20() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect20").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button20").on("click", function() {
  runEffect20();
}); 
function runEffect21() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect21").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button11").on("click", function() {
  runEffect21();
}); 
function runEffect22() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect22").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button22").on("click", function() {
  runEffect22();
}); 
function runEffect23() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect23").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button23").on("click", function() {
  runEffect23();
}); 
function runEffect24() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect24").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button24").on("click", function() {
  runEffect24();
}); 
function runEffect25() {
  // Generate a random effect
  var effects = ["blind", "bounce", "clip", "drop", "explode", "fade", "fold", "highlight", "puff", "pulsate", "scale", "shake", "size", "slide"];
  var selectedEffect = effects[Math.floor(Math.random() * effects.length)];

  // Run the effect
  $("#effect25").toggle(selectedEffect, 1000);
};

// Set effect from button click
$("#description-button25").on("click", function() {
  runEffect25();
}); 
});