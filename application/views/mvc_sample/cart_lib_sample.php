<div class="panel-heading">Panel heading</div>
 <div class="container">
	 
<hr/>
상품 리스트
<hr/>
<form method="post" action="<?=site_url('cart_lib/add')?>">
<input type="hidden" name="id" value="g1011" />
<input type="hidden" name="name" value="sample1" />
<input type="hidden" name="price" value="10000" />
<!-- <table class="tablesorter" border="0" cellpadding="0" cellspacing="1"> -->
<!-- <table class="table"> -->
<table class="table table-striped">
<thead>
<tr>
  <th style="text-align:left" width="20%">상품명</th>
  <th style="text-align:left" width="20%">수량</th>
  <th style="text-align:left" width="20%">단가</th>
  <th style="text-align:left" width="20%">상품 옵션</th>
  <th width="20%"></th>
</tr>
</thead>

<tr>
<td>sample 1</td>
<td style="text-align:center">
    <input type="text" name="qty" value="1" style="text-align: right; width: 40" maxlength="3" />
</td>
<td style="text-align:right">10,000원</td>
<td style="text-align:center">
    사이즈 :
    <!-- <select name="size">
        <option width="20%" value="L">L</option>
        <option width="20%" value="M">M</option>
        <option value="S">S</option>
    </select>
 -->
     <!-- start Drop donw -->
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">L</a></li>
    <li><a href="#">M</a></li>
    <li><a href="#">S</a></li>
    <!-- <li role="separator" class="divider"></li> -->
    <!-- <li><a href="#">Separated link</a></li> -->
  </ul>
</div>


     <!--   End Drop Down -->
 
     
    색상 :
    <!-- <select name="color">
        <option value="노랑">노랑</option>
        <option value="파랑">파랑</option>
        <option value="빨강">빨강</option>
    </select>
 -->
	<!-- start -->
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">노랑</a></li>
    <li><a href="#">M</a></li>
    <li><a href="#">S</a></li>
    <!-- <li role="separator" class="divider"></li> -->
    <!-- <li><a href="#">Separated link</a></li> -->
  </ul>
</div>

	<!-- End  -->
</td>
<td style="text-align:center"><input type="submit" value="장바구니 담기" /></td>
</tr>
</table>
</form>
 
<hr/>
장바구니 내역
<hr/>
<form method="post" action="<?=site_url('cart_lib/update')?>">
<!-- <table class="tablesorter" border="0" cellpadding="0" cellspacing="1"> -->
<table class="table table-striped">


<thead>
<tr>
    <th>취소</th>
    <th style="text-align:center" width="20%">상품명</th>
    <th style="text-align:center" width="20%">상품 옵션</th>
    <th style="text-align:center" width="20%">단가</th>
    <th style="text-align:center" width="20%">수량</th>
    <th style="text-align:center" width="20%">합계</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
<?php foreach($this->cart->contents() as $items): ?>
<input type="hidden" name="rowid[]" value="<?php echo $items['rowid'];?>" />
<tr>
  <td><input type="checkbox" name="del[]" value="<?php echo $i - 1;?>" /></td>
  <td><?php echo $items['name']; ?></td>
  <td>
<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
        <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?>
 
<?php endforeach; ?>
<?php endif; ?>
  </td>
  <td style="text-align:right"><?php echo number_format($items['price']); ?>원</td>
  <td style="text-align:center">
    <input type="text" name="qty[]" value="<?php echo $items['qty']?>" maxlength="3" size="5" style="text-align:right"/>
  </td>
  <td style="text-align:right"><?php echo number_format($items['subtotal']); ?>원</td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
<td colspan="4" align="center"> 총 합계</td>
<td style="text-align:right"><?php echo number_format($this->cart->total_items());?>개</td>
<td style="text-align:right"><?php echo number_format($this->cart->total());?>원</td>
</tbody>
<tfoot>
<tr>
    <td colspan="6" style="text-align: center">
        <input type="button" onclick="location.href='<?=site_url('cart_lib/destroy')?>'" value="장바구니 비우기" />
        <input type="submit" value="장바구니 수정" />
    </td>
</tr>
</tfoot>
</table>
</form>
<hr />
장바구니 정보
<hr />
<pre>
<?php var_dump($this->cart->contents());?>
</pre>
