<table class="tablesorter" border="0" cellpadding="0" cellspacing="1">
<thead>
<tr>
  <th style="text-align:center" width="20%">구간</th>
  <th width="80%">벤치마크</th>
</tr>
</thead>
<tr>
    <td>code_start ~ code_end</td>
    <td><?php echo $code;?></td>
</tr>
<tr>
    <td>dog ~ cat</td>
    <td><?php echo $dog_cat;?></td>
</tr>
<tr>
    <td>cat ~ bird</td>
    <td><?php echo $cat_bird;?></td>
</tr>
<tr>
    <td>dog ~ bird</td>
    <td><?php echo $dog_bird;?></td>
</tr>
<tr>
    <td>전체수행시간</td>
    <td><?php echo $this->benchmark->elapsed_time();?></td>
</tr>
<tr>
    <td>전체수행시간(축약코드)</td>
    <td>0.0303</td>
</tr>
<tr>
    <td>메모리 사용량</td>
    <td><?php echo $this->benchmark->memory_usage();?></td>
</tr>
<tr>
    <td>메모리 사용량 (축약코드)</td>
    <td>0.65MB</td>
</tr>
</table>