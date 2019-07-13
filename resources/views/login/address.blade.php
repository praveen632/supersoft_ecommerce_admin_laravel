@extends('layout_setting.dashboard')
@section('content')


<div class="_1GRhLX _2F3XAu"><span class="_985Oh_">Manage Addresses</span>
    <div>
        <div class="_1yf-9T">
            <div>
                <div class="_2kr2AM">
                	<a href="<?php echo url('/add/address')?>"><img height="14" width="14" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMyMTc1RkYiIGQ9Ik0xMS4yNSA2Ljc1aC00LjV2NC41aC0xLjV2LTQuNUguNzV2LTEuNWg0LjVWLjc1aDEuNXY0LjVoNC41Ii8+PHBhdGggZD0iTS0zLTNoMTh2MThILTMiLz48L2c+PC9zdmc+" class="_5GGQaL">ADD A NEW ADDRESS</a></div>
            </div>
        </div>
        <div>
<?php if(count($res) > 0){?>
<?php foreach($res1 as $row){ ?>
        	
            <div class="_2HW10N">
                <div class="_1MIUfH">
                    <div class="iqngYe">
                        <div class="_1suckO"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjE2IiB2aWV3Qm94PSIwIDAgNCAxNiI+CiAgICA8ZyBmaWxsPSIjODc4Nzg3IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxjaXJjbGUgY3g9IjIiIGN5PSIyIiByPSIyIi8+CiAgICAgICAgPGNpcmNsZSBjeD0iMiIgY3k9IjgiIHI9IjIiLz4KICAgICAgICA8Y2lyY2xlIGN4PSIyIiBjeT0iMTQiIHI9IjIiLz4KICAgIDwvZz4KPC9zdmc+Cg==">
                            <div class="_1GRhLX _2-SLui">
                                <div class="_2-u7lV"><a href="<?php echo url('/edit/addresss?id='.$row->add_id) ?>"><span>Edit</span></a></div>
                                <div class="_2-u7lV"><a href="<?php echo url('/delete/addresss?id='.$row->add_id) ?>"><span>Delete</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="_2AIo8W">
		<span class="_3zENzM"><?php echo $row->address_type ?></span>
	</div><p class="ZBYhh4">
	<span class="_2Fw4MM"><?php echo $res->user_name ?></span>
<span class="_3MbGVP _2Fw4MM"><?php echo $res->phone ?></span> 	
</p>
<span class="ZBYhh4 _1Zn3iq">
	Locality - <?php echo $row->locality ?>,   Address-<?php echo $row->address ?>, City- <?php echo $row->city ?>, State- <?php echo $row->state?> Land Mark-<?php echo $row->landmark?>, 
	<span class="_3n0HwW">Alternate Phone -</span><?php echo $row->atternate_phone ?><br>
	<span class="_3n0HwW">Pin Code-</span><?php echo $row->pin_code ?>
</span>
</div>
</div>

<?php } ?>
<?php }else{ ?>
<tr><td style="background-color: #ddd; text-align: center; font-weight: bold;">Record Not Found</td></tr>
<?php } ?>



</div>
</div>
</div>



@endsection;