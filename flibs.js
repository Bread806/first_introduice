function include(dom) {
  const all = $("include", dom);
  for (let k = 0; k < all.length; k++) {
    let o = all[k];
    let src = $(o).attr('src'); o.removeAttribute('src');
    fetch(src).then(function (file) { file.text().then(function (content) { $(o).html(content); }); }, function () { });
  }
}
function log(...o) {
  let e = (new Error()).stack.split('\n');
  let x = e[2];
  let y = x, q, p = y.indexOf('('); y = y.substr(0, p); p = y.indexOf('at'); let 函名 = y.substr(p + 3);
  y = x; p = y.lastIndexOf('/'); y = y.substr(p + 1); p = y.indexOf(':'); let 檔名 = y.substr(0, p);
  y = y.substr(p + 1); p = y.indexOf(':'); let 行號 = y.substr(0, p);
  s = `${函名}(${檔名}:${行號})`;
  let ans = e.map(x => {
    let y = x, q, p = y.indexOf('('); y = y.substr(0, p); p = y.indexOf('at'); let 函名 = y.substr(p + 3);
    y = x; p = y.lastIndexOf('/'); y = y.substr(p + 1); p = y.indexOf(':'); let 檔名 = y.substr(0, p);
    y = y.substr(p + 1); p = y.indexOf(':'); let 行號 = y.substr(0, p);
    return `${行號}`;
  }).filter((v, k) => k >= 2).join(',');
  console.log(s, `(${ans})`, ...o);
}