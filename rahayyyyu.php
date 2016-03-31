<?php
$baris=1;
$dwn=12151443;
$grs=12151467;
$b=1;
echo "<center><font face='Algerian'size='3'><b> TABEL MAHASISWA</b></font></center>";
echo "</br>";
echo"<hr>";
echo "<table align=\"center\"width=\"450\" border=\"2\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#ffffff\">";
echo "<tr bgcolor=\"blue\">";
echo "<th><font color='white'>NO</font></th>";
echo "<th><font color='white'>NAMA</font></th>";
echo "<th><font color='white'>NIM</font></th>";
echo "<th><font color='white'>KODE MAKUL</font></th>";
echo "</tr>";
for($i=1; $i<=10;$i++) 
	{
    $warna=($baris%2==1)? "#cccccc" : "#fff";
    $cc=($baris%2 ==1)? "3":"1";
    $total=$grs*$i;
    $total2=$dwn*$i;
    $tdd="<td>
    		<font face='arial'size='4'>
    		Rahayu
    		</font>
    	  </td> 

    		<td align='center'>
    			<font face='arial'size='4'>
    			$total2
    			</font>
    		</td>

    		<td align='center'>
				<font face='arial'size='4'>
				$total
				</font>
			</td>";
	$tdd1="<td colspan=\"".$cc."\">
			<pre><font face='arial'size='4'>Rahayu             $total2             $total</font></pre></td>";
	$tdd3="<td colspan=\"".$cc."\">
			<pre><font face='arial'size='4'>Rahayu            $total2            $total</font></pre></td>";
    echo "<tr valign='top' bgcolor=\"".$warna."\">";
    echo "<td >$i</td>";
    
    if($baris==1)//&&($baris=3)&&($baris=5)
    	{
    	echo "$tdd1";
   	 	}
    elseif($baris==3)
    	{
    	echo "$tdd1";
    	}
    elseif($baris==5)
    	{
    	echo "$tdd1";
    	}
    elseif($baris==7)
    	{
    	echo "$tdd3";
    	}
    elseif($baris==9)
   		{
    	echo "$tdd3";
    	}

    IF($baris==2)
    	{
    	echo"$tdd";
    	} 
    elseif($baris==4)
    	{
    	echo"$tdd";
		}
	elseif($baris==6)
    	{
    	echo"$tdd";
		}
	elseif($baris==8)
    	{
    	echo"$tdd"; 
		}
	elseif($baris==10)
    	{
    	echo"$tdd";
		}

    echo "</tr>";
	$baris++;
}



echo "</table>";
echo "</center>";
?>



