/**
 * Created by venyk on 20/11/2017.
 */

document.querySelector("[method='GET']").addEventListener('submit',(e) => {
    e.preventDefault();
fetch('http://127.0.0.1/f2i/words',{ method : 'GET'}).then( (response) => {
    return response.text();
}).then( (data) => {
    document.querySelector('pre').innerHTML = JSON.stringify(data);
});
});

document.querySelector("[method='POST']").addEventListener('submit',(e) => {
    e.preventDefault();
var formData = new FormData(e.target);

fetch('http://127.0.0.1/f2i/words', { method : 'POST', body : formData}).then( (response) => {
    return response.json();
}).then((data) => {
    document.querySelector('pre').innerHTML = JSON.stringify(data);
});
});

document.querySelector("[method='DELETE']").addEventListener('submit', (e) => {

    console.log("fff");
e.preventDefault();

fetch('http://127.0.0.1/f2i/words', { method : 'DELETE'}).then((response) => {
    console.log(response);
return response.text();
}).then((data) => {
    console.log(data);
});
});

document.querySelector("[method='PUT']").addEventListener('submit', (e) => {
    console.log("fff");
e.preventDefault();

fetch('http://127.0.0.1/f2i/words', { method : 'PUT'}).then( (response) => {
    console.log(response);
return response.text();
}).then((data) => {
    console.log(data);
});
});