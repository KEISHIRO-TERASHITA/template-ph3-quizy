let items = document.querySelectorAll(".item");
const box = document.querySelector(".box");
items.forEach((item) => {
    const pulldown = item.querySelector(".pulldown");
    pulldown.addEventListener("change", function () {
        const titles = Array.from(items);
        const index = this.selectedIndex;
        box.innerHTML = "";
        titles.splice(titles.indexOf(item), 1);
        titles.splice(index, 0, item);
        titles.forEach((a, a_index) => {
            box.appendChild(a);
            a.querySelector("select").value = a_index + 1;
        });
        items = document.querySelectorAll(".item");
    });
});
