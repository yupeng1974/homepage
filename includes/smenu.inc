<p id="lpdweb"></p>
<script>
   var down = document.getElementById('lpdweb');
   function getlk() {
      var path = window.location.pathname;
      down.innerHTML = path.split("/").pop();
      document.sprod.action = down.innerHTML;      
   }
</script>
<form name="sprod">
<span style="font-size:16px; font-weight:bold;"> Please select: </span>
&nbsp
<select hidden NAME="product" id="product" onchange="this.form.submit()"> 
<option VALUE="select product" disabled> Product </option>
<option VALUE=<?= $product ?> selected> <?= $product ?> </option>
</select>
<?php
if (isset($variables)) {
  if (count($variables) > 1) {
    print "&nbsp";
    print "<select id='variable' NAME='variable' onchange='this.form.submit()'>";
    print "<option VALUE='select variable' disabled> Variable </option>";
    print "<option VALUE=$variable selected> $variable";
    foreach ($variables as $vvv) {
      if ($vvv == $variable) {
        continue;
      }
      print "<option VALUE=$vvv> $vvv";
    }
    print "</select>";
  }
}
if (isset($msats)) {
  if (count($msats) > 1) {
    print "&nbsp";
    print "<select id='msat' NAME='msat' onchange='this.form.submit()'>";
    print "<option VALUE='select satellites' disabled> msats </option>";
    print "<option VALUE=$msat selected> $msat";
    foreach ($msats as $mss) {
      if ($mss == $msat) {
        continue;
      }
      print "<option VALUE=$mss> $mss";
    }
    print "</select>";
  }
}
if (isset($sats)) {
  if (count($sats) > 1) {
    print "&nbsp";
    print "<select id='sat' NAME='sat' onchange='this.form.submit()'>";
    print "<option VALUE='select satellite' disabled> Satellite </option>";
    print "<option VALUE=$sat selected> $sat2";
    foreach ($sats as $sss) {
      if ($sss !== $sat) {
        $sss2 = $sat2s["$sss"];
        print "<option VALUE={$sss}> {$sss2}";
      }
    }
    print "</select>";
  }
}
if (isset($modes)) {
  if (count($modes) > 1) {
    print "&nbsp";
    print "<select id='mode' NAME='mode' onchange='this.form.submit()'>";
    print "<option VALUE='select coverage' disabled> Coverage </option>";
    print "<option VALUE=$mode selected> $mode";
    foreach ($modes as $mmm) {
      if ($mmm == $mode) {
        continue;
      }
      print "<option VALUE=$mmm> $mmm";
    }
    print "</select>";
  }
}
if (isset($versions)) {
  if (count($versions) > 1) {
    print "&nbsp";
    print "<select id='version' NAME='version' onchange='this.form.submit()'>";
    print "<option VALUE='select version' disabled> Version </option>";
    print "<option VALUE=$version selected> $version";
    foreach ($versions as $avvv) {
      if ($avvv == $version) {
        continue;
      }
      print "<option VALUE=$avvv> $avvv";
    }
    print "</select>";
  }
}
if (isset($networks)) {
  if (count($networks) > 1) {
    print "&nbsp";
    print "<select id='network' NAME='network' onchange='this.form.submit()'>";
    print "<option VALUE='select network' disabled> Network </option>";
    print "<option VALUE=$network selected> $network";
    foreach ($networks as $nnn) {
      if ($nnn == $network) {
        continue;
      }
      print "<option VALUE=$nnn> $nnn";
    }
    print "</select>";
  }
}
if (isset($years)) {
  print "&nbsp";
  print "<select id='year' NAME='year' onchange='this.form.submit()'>";
  print "<option VALUE='select year' disabled> Year </option>";
  print "<option VALUE=$year selected> $year";
  foreach ($years as $yyy) {
    if ($yyy == $year) {
      continue;
    }
    print "<option VALUE=$yyy> $yyy";
  }
  print "</select>";
}
if (isset($months)) {
  print "&nbsp";
  print "<select id='month' NAME='month' onchange='this.form.submit()'>";
  print "<option VALUE='select month' disabled> Month </option>";
  print "<option VALUE=$month selected> $month";
  foreach ($months as $mmm) {
    if ($mmm == $month) {
      continue;
    }
    print "<option VALUE=$mmm> $mmm";
  }
  print "</select>";
}
if (isset($regions)) {
  print "&nbsp";
  print "<select id='region' NAME='region' onchange='this.form.submit()'>";
  print "<option VALUE='select region' disabled> Region </option>";
  print "<option VALUE=$region selected> $region";
  foreach ($regions as $rrr) {
    if ($rrr == $region) {
      continue;
    }
    print "<option VALUE=$rrr> $rrr";
  }
  print "</select>";
}
if (isset($daves)) {
  print "&nbsp";
  print "<select id='dave' NAME='dave' onchange='this.form.submit()'>";
  print "<option VALUE='select dave' disabled> Days </option>";
  print "<option VALUE=$dave selected> $dave";
  foreach ($daves as $ddd) {
    if ($ddd == $dave) {
      continue;
    }
    print "<option VALUE=$ddd> $ddd";
  }
  print "</select>";
}
if (isset($times)) {
  print "&nbsp";
  print "<select id='time' NAME='time' onchange='this.form.submit()'>";
  print "<option VALUE='select time' disabled> Time </option>";
  print "<option VALUE=$time selected> $time";
  foreach ($times as $ttt) {
    if ($ttt == $time) {
      continue;
    }
    print "<option VALUE=$ttt> $ttt";
  }
  print "</select>";
}
?>
</form>
<br>
