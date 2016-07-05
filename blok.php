<?PHP
	if(!empty($blokid)){
	$sorgu=mysql_query("select *,DATE_FORMAT(date, '%d.%m.%Y') AS tarix from blok where u_id='".$blokid."'");
	$blokgoster=mysql_fetch_array($sorgu);
	?>
	<table cellpadding="0" cellspacing="0" border="0" width="879">
		<tr>
			<td class="xeber_tarix" height="20"><b><u><?PHP echo $blokgoster['tarix'];?></u></b></td>
		</tr>
		<tr>
			<td height="5"></td>
		</tr>
		<tr>
			<td class="text"><b><?PHP echo $blokgoster['name'];?></b></td>
		</tr>
		<tr>
			<td height="5"></td>
		</tr>
		<tr>
			<td class="text"><?PHP echo $blokgoster['text'];?></td>
		</tr>
		<tr>
			<td height="20"></td>
		</tr>
		<tr>
			<td class="text"><font color="red"><b>Fikrinizi qeyd edin</b></font></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<!-- facebook commenct start -->
		<tr>
			<td>
				<div class="fb-comments" data-href="<?PHP echo $site_url; echo $lng;?>/pages/20/blok/<?PHP echo $blokgoster['u_id'];?>" data-width="879" data-numposts="5" data-colorscheme="light"></div>
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<!-- facebook commenct end -->
	</table>
<?PHP
	} else {
	//Blok siralayan funcsiya
	$sorgu=mysql_query("select count(*) as c from blok WHERE l_id='".$lng."'");
	$rr = mysql_fetch_object($sorgu);
	$total = ceil($rr->c/20);
	@$page = (int) $_GET['page'];
	if ($page < 1) $page = 1;
	$start = ($page-1)*20;
	$sorgu=mysql_query("select *,DATE_FORMAT(date, '%d.%m.%Y') AS tarix from blok WHERE l_id='".$lng."' order by u_id desc limit $start, 20");
	?>
	<table cellpadding="0" cellspacing="0" border="0" width="100%"> 
	<?PHP
		while ($qisablok=mysql_fetch_array($sorgu)){
		?>
		<style>
			p {
				padding:0px;
				margin:0px;
			}
		</style>
			<tr>
				<td>
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td align="left" class="text"><b><?PHP echo $qisablok['tarix'];?><b></td>
						</tr>
						<tr>
							<td class="text" valign="top"><?PHP echo $qisablok['name'];?></td>
						</tr>
						<tr>
							<td align="right"><a href="<?PHP echo $site_url; echo $lng;?>/pages/20/blog/<?PHP echo $qisablok['u_id'];?>#ppp" class="readmore"><?PHP if($lng==1){?>ətraflı oxu<?PHP } elseif($lng==2){?>подробнее<?PHP } elseif($lng==3){?>read more<?PHP }?>...</a></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td height="5"></td>		
			</tr>
			<tr>
				<td height="1" bgcolor="#CCCCCC"></td>		
			</tr>
			<tr>
				<td height="5"></td>		
			</tr>

		<?PHP
		}
		?>
		<tr>
			<td align="center">
				<?PHP
				for ($pp= 1; $pp<=$total; $pp++) {
					if($page==$pp){?><span class="next_page1">&nbsp;<?echo $pp;?>&nbsp;</span><?PHP }
					else{
					?>
					<a href="<?PHP echo $site_url; echo $lng;?>/pages/20/pnex/<?PHP echo $pp;?>" class="next_page">&nbsp;<?PHP echo $pp;?>&nbsp;</a>&nbsp;
					<?
					}
				}
				?>
			</td>
		</tr>
	</table>
	<?PHP
	}
?>