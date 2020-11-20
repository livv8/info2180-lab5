document.getElementById("controls");

function reply_click(clicked_id){
        alert(clicked_id);
}

fetch(world.php)
.then(response => response.json())
.then(data => console.log(data));