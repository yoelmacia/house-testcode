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
