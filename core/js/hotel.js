/* Managing tags on URLs */
function getURItag() {
  var tag = window.location.href;
  tag = tag.split("#");
  if (tag.length == 1) {
    tag = "";
  } else {
    tag = tag[1];
  }
  return tag;
}
function setURItag(tag) {
  var url = window.location.href;
  url = url.split("#");
  if (url.length == 1) {
    url.append(tag);
  } else {
    url[1] = tag;
  }
  url = url.join("#");
  window.location.href = url;
  return url;
}
getURItag().addEventListener("change", function() {
  room(getURItag());
});


/* Loading rooms on the website */
var room;
function room(id) {
  setURItag(id);
  renderRoom(id);
}
function renderRoom(id) {
  document.getElementById("room").innerHTML = "Loading...";
  var exp = new XMLHttpRequest();
  exp.open("GET", "/rooms/" + encodeURI(id) + ".json", true);
  exp.send();
  // Check if loading status changes
  exp.onreadystatechange = () => {
    // readyState 4 => Quest finished
    if (exp.readyState === 4) {
      document.getElementById("options").innerHTML = "";
      document.getElementById("controls").innerHTML = "";
      document.getElementById("save").href = "";
      document.getElementById("save").innerHTML = "";
      // The room exists?
      if (exp.status != 200) {
        document.getElementById("room").innerHTML = "Error: Room not found";
        return;
      } else {
        // Room
        var room = JSON.parse(exp.response);
        room["html"].replace("{{name}}", name);
        document.getElementById("room").innerHTML = room["html"];
        // Options
        var options = Array.from(room["options"]);
        options.forEach(function(item, index) {
          document.getElementById("options").innerHTML += "<a onclick=\"room('" + encodeURI(item[0]) + "'\)\">&gt; " + item[1] + "</a>";
          if (options.length != index - 1) {
            document.getElementById("options").innerHTML += '<br />';
          }
        });
        // Controls
        var up;
        var left;
        var right;
        var down;
        // Define undefined
        if (typeof room["controls"]["up"] == "undefined") {
          up = "";
        } else {
          up = room["controls"]["up"];
        }
        if (typeof room["controls"]["left"] == "undefined") {
          left = "";
        } else {
          left = room["controls"]["left"];
        }
        if (typeof room["controls"]["right"] == "undefined") {
          right = "";
        } else {
          right = room["controls"]["right"];
        }
        if (typeof room["controls"]["down"] == "undefined") {
          down = "";
        } else {
          down = room["controls"]["down"];
        }
        // Define positions
        if (up != "") {
          up = '<button title=\"Up\" onclick="room(\'' + encodeURI(up) + '\');">&#8593;</button>';
        }
        if (left != "") {
          left = '<button title=\"Left\" onclick="room(\'' + encodeURI(left) + '\');">&#8592;</button>';
        }
        if (right != "") {
          right = '<button title=\"Right\" onclick="room(\'' + encodeURI(right) + '\');">&#8594;</button>';
        }
        if (down != "") {
          down = '<button title=\"Down\" onclick="room(\'' + encodeURI(down) + '\');">&#8595;</button>';
        }
        // Show
        document.getElementById("controls").innerHTML = up + "<br />" + left + "<button title=\"Kastikif v1.14\">C</button>" + right + "<br />" + down;
      }
      // Save button
      document.getElementById("save").href = "/cookie?save=" + encodeURI(getURItag());
      document.getElementById("save").innerHTML = "<button>Save</button>";
    }
  }
}

/*var name;
try {
  fetch("/cookie/getname.php")
  .then(response => response.json())
  .then(function(data){
    name = data["name"];
  });
}*/