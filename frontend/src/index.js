function windowManager() {
  let right_window = document.getElementsByClassName("window-right")[0];
  let left_window = document.getElementsByClassName("window-left")[0];

  function addCookieWindow(element) {
    element.addEventListener("mouseover", e => {
      e.target.style.backgroundImage =
        "url('https://emojis.wiki/emoji-pics/lg/cookie-lg.png')";
    });

    element.addEventListener("mouseout", e => {
      e.target.style.background = "#c7e9ff";
    });
  }

  addCookieWindow(right_window);
  addCookieWindow(left_window);
}

windowManager();

function doorManager() {
  let door = document.getElementsByClassName("door")[0];

  function addCookieDatabase(element) {
    const url = "http://localhost:8000/cookies/orders";

    element.addEventListener("click", function() {
      axios
        .post(url)
        .then(response => {
          alert(response.data);
        })
        .catch(error => {
          alert(error);
        });
    });
  }
  addCookieDatabase(door);
}

doorManager();

function sunManager() {
  let nightSky = document.getElementsByClassName("central-div-row up")[0];
  let door = document.getElementsByClassName("door")[0];
  let right_window = document.getElementsByClassName("window-right")[0];
  let left_window = document.getElementsByClassName("window-left")[0];
  let sun = document.getElementsByClassName("sun")[0];

  function addNightMode(element) {
    element.addEventListener("click", e => {
      if (e.target.style.background === "blue") {
        // Day mode css
        e.target.style.background = "";
        nightSky.style.background = "";
        right_window.style.background = "";
        left_window.style.background = "";
        // Allow events
        right_window.style.pointerEvents = "";
        left_window.style.pointerEvents = "";
        door.style.pointerEvents = "";
      } else {
        // Night mode css
        e.target.style.background = "blue";
        nightSky.style.background = "black";
        right_window.style.background = "yellow";
        left_window.style.background = "yellow";
        // Cancel events
        right_window.style.pointerEvents = "none";
        left_window.style.pointerEvents = "none";
        door.style.pointerEvents = "none";
      }
    });
  }

  addNightMode(sun);
}

sunManager();
