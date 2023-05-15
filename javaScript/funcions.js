function mostraProd(link_id)
{
    let file = "/index.php?action=categoria&animal_id=" + link_id;
    fetch(file)
        .then(x => x.text())
        .then(y => document.getElementById("cat").innerHTML = y);
}