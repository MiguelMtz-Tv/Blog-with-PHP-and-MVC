const postId = (id) =>{
    const url = 'http://blog.com.test/noticia.php';
    const xhr = new XMLHttpRequest();
    let data = 'id='+id;
    xhr.open('POST', url, true);

    xhr.onload = function(){
        if(xhr.readyState === xhr.DONE){
            if(xhr.status === 200){
                console.log('datos enviados');
                location.href = url;
            }
        }
    }
    xhr.send(data);
}