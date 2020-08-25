(function() {
    fetch('counter.php', {
        method: 'post', 
        headers: {
             'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: "increment=true"
    }).then(response => response.text()).then(views => {
        document.getElementById("counter").innerHTML = views;
    });
    
    let interval = setInterval(function() {
        fetch('counter.php', { method: 'GET' })
        .then(response => response.text())
        .then(views => {
            document.getElementById("counter").innerHTML = views;
        });
    },1000);
})();