/* Insert your javascript here */
// based on trevors navigation video.
// https://www.youtube.com/watch?v=DOTdvy9flyA
window.onscroll = function () {
  console.clear();
  console.log("Win Y:" + window.scrollY);
  var navlinks = document
    .getElementsByTagName("nav")[0]
    .getElementsByTagName("a");
  //console.log(navlinks);
  var articles = document
    .getElementsByTagName("main")[0]
    .getElementsByTagName("article");

  console.log(articles);
  // console.log(articles[0].offsetTop + '.' + (articles[0].offsetTop + articles[0].offsetHeight) );
  // console.log(articles[1].offsetTop + '.' + (articles[0].offsetTop + articles[0].offsetHeight) );
  // console.log(articles[2].offsetTop + '.' + (articles[0].offsetTop + articles[0].offsetHeight) );

  for (var a = 0; a < articles.length; a++) {
    var articleTop = articles[a].offsetTop;
    var articleBottom = articles[a].offsetTop + articles[a].offsetHeight;
    //console.log(articleTop + '.' + articleBottom );
    if (window.scrollY >= articleTop && window.scrollY < articleBottom) {
      console.log(articles[a].id + ": current");
      navlinks[a].classList.add("current");
    } else {
      console.log(articles[a].id + ":");
      navlinks[a].classList.remove("current");
    }
  }
};
