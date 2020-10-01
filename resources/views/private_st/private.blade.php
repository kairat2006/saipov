<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/assets/css/private_st/style.css">

</head>
<body>

@foreach ($posts as $item)
  {{$item->name}}
@endforeach
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Profile')" id="defaultOpen">Профиль</button>
  <button class="tablinks" onclick="openTab(event, 'Subject')">Предметы</button>
  <button class="tablinks" onclick="openTab(event, 'Material')">Уроки</button>
</div>

<div id="Profile" class="tabcontent">

</div>

<div id="Subject" class="tabcontent">
   Subjcet
</div>

<div id="Material" class="tabcontent">
  Material
</div>


<script src="/assets/js/private_st/script.js"></script>
</body>
</html> 