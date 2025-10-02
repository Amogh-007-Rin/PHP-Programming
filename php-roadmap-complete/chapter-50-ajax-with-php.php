<?php
// Chapter 50: AJAX example (client + server in one file)
// If request has AJAX header, respond JSON; otherwise show a page with JS fetch
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
    header('Content-Type: application/json');
    echo json_encode(['time'=>date('H:i:s')]);
    exit;
}
?>
<!doctype html>
<button id="btn">Get Time (AJAX)</button>
<div id="out"></div>
<script>
document.getElementById('btn').addEventListener('click', ()=>{
  fetch(location.href, {headers: {'X-Requested-With': 'XMLHttpRequest'}})
    .then(r=>r.json()).then(j=>document.getElementById('out').innerText = j.time);
});
</script>
<?php
?>