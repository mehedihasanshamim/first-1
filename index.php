<html>
	<head>
		<title>pbs-Application</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

<!-- application section -->

		<div id="application">
			<!-- top section of application -->
			<fieldset>
				<table id="top">
					<tr>
						<td style="width:15%;">আবেদন নং</td>
						<td><input type="text" name="app_no" size="5" /></td>
						<td>সংযোগের ধরন</td>
						<td>
							<select name="connection_type">
								<option value=""></option>
								<option value="">বাণিজ্যিক (সার্ভিস ড্রপ)</option>
								<option value="">সেচ</option>
								<option value="">আবাসিক  (সার্ভিস ড্রপ)</option>
								<option value="">বাণিজ্যিক</option>
								<option value="">শিল্প প্রতিষ্ঠান</option>
								<option value="">দাতব্য প্রতিষ্ঠান</option>
								<option value="">আবাসিক ( ডিপোজিট কাজ )</option>
								<option value="">বাণিজ্যিক ( ডিপোজিট কাজ )</option>
							</select>
						</td>
					</tr>
				</table>
			</fieldset>
			<!-- end top section -->

			<fieldset>
				<table id="basic_info">
					<tr>
						<td>আবেদনকৃত প্রতিষ্ঠানের নাম</td>
						<td colspan="3"><input type="text" name="app_org_name" /></td>
					</tr>
					<tr>
						<td>আবেদনকারীর নাম</td>
						<td colspan="3"><input type="text" name="applicant_name" /></td>
					</tr>
					<tr>
						<td>পিতার নাম</td>
						<td colspan="3"><input type="text" name="fname" /></td>
					</tr>
					<tr>
						<td>মাতার নাম</td>
						<td colspan="3"><input type="text" name="mname" /></td>
					</tr>
					<tr>
						<td>স্বামীর নাম</td>
						<td colspan="3"><input type="text" name="husband_name" /></td>
					</tr>
					<tr>
						<td>জাতীয় পরিচয় পত্র নং</td>
						<td><input type="text" name="nid" style="width:150px;" /></td>
						<td style="width:70px;">লিঙ্গ</td>
						<td>
							<select name="gender">
								<option value=""></option>
								<option value="">পুরুষ</option>
								<option value="">মহিলা</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>জন্ম তারিখ</td>
						<td colspan="3">
							<select name="day" style="width:50px;">
								<?php
									for($i=1;$i<=30;$i++){
										echo "<option value='$i'>$i</option>";
									}
								?>
							</select>
							
							<select name="day">
								<option value='jan'>Jan</option>
								<option value='feb'>Feb</option>
								<option value='mar'>Mar</option>
								<option value='apr'>Apr</option>
								<option value='May'>May</option>
								<option value='jun'>Jun</option>
								<option value='jul'>Jul</option>
								<option value='aug'>Aug</option>
								<option value='sep'>Sep</option>
								<option value='oct'>Oct</option>
								<option value='nov'>Nov</option>
								<option value='dec'>Dec</option>	
							</select>
							<select name="day">
								<?php
									for($i=date('Y');$i>=1960;$i--){
										echo "<option value='$i'>$i</option>";
									}	
								?>
							</select>
						</td>
					</tr>
				</table>
			</fieldset>
<!-- end of basic information section -->

<!-- sms info section -->
			<fieldset id="sms">
				<legend>SMS এর ঠিকানা</legend>
				<table>
					<tr>
						<td>মোবাইল</td>
						<td><input type="number" name="mobile_no" /></td>
						<td>ইমেইল</td>
						<td><input type="email" name="email" /></td>
					</tr>
				</table>
			</fieldset>
<!-- end of sms info section -->

<!-- present address section -->
	<fieldset id="present_address">
		<legend>বর্তমান যোগাযোগের ঠিকানা</legend>
		<table>
			<tr>
				<td colspan="2">বাড়ির নাম / হোল্ডিং নং</td>
				<td colspan="4"><input type="text" name="house_holding_no" style="width:350px;" /></td>
			</tr>
			<tr>
				<td>জেলা</td>
				<td><input type="text" name="district" /></td>
				<td>উপজেলা</td>
				<td><input type="text" name="sub_district" /></td>
				<td>ইউনিয়ন</td>
				<td><input type="text" name="union" /></td>
			</tr>
			<tr>
				<td>গ্রাম / পাড়া / মহল্লা</td>
				<td><input type="text" name="vill_pada_moholla" /></td>
				<td>ডাকঘর</td>
				<td><input type="text" name="post_office" /></td>
				<td>পোস্ট কোড</td>
				<td><input type="number" name="post_code" /></td>
			</tr>
			<tr>
				<td colspan="6">
					<input type="checkbox" name="option_1"/>স্থায়ী ঠিকানা হিসেবে ব্যবহার করুন
					<input type="checkbox" name="option_2"/>প্রস্তাবিত সংযোগস্থলের বিবরন  হিসেবে ব্যবহার করুন
				</td>
			</tr>
		</table>
	</fieldset>
<!-- end of present address section -->

<!-- permanent address section -->
	<fieldset id="present_address">
		<legend>বর্তমান যোগাযোগের ঠিকানা</legend>
		<table>
			<tr>
				<td colspan="2">বাড়ির নাম / হোল্ডিং নং</td>
				<td colspan="4"><input type="text" name="house_holding_no" style="width:350px;" /></td>
			</tr>
			<tr>
				<td>জেলা</td>
				<td><input type="text" name="district" /></td>
				<td>উপজেলা</td>
				<td><input type="text" name="sub_district" /></td>
				<td>ইউনিয়ন</td>
				<td><input type="text" name="union" /></td>
			</tr>
			<tr>
				<td>গ্রাম / পাড়া / মহল্লা</td>
				<td><input type="text" name="vill_pada_moholla" /></td>
				<td>ডাকঘর</td>
				<td><input type="text" name="post_office" /></td>
				<td>পোস্ট কোড</td>
				<td><input type="number" name="post_code" /></td>
			</tr>
			<tr>
				<td colspan="6">
					<input type="checkbox" name="option_2"/>প্রস্তাবিত সংযোগস্থলের বিবরন  হিসেবে ব্যবহার করুন
				</td>
			</tr>
		</table>
	</fieldset>
<!-- end of permanent address section -->

<!-- connection details -->
	<fieldset id="connection">
		<legend>কানেকশনের বিবরন</legend>
		<table>
			<tr>
				<td>আবেদন প্রকৃতি</td>
				<td>
					<select name="application_type">
						<option value=""></option>
						<option value="">স্থায়ী সংযোগের ক্ষেত্রে</option>
						<option value="">স্থায়ী সংযোগের ক্ষেত্রে</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>মিটার সংখ্যা</td>
				<td><input type="number" name="meter_no" /></td>
			</tr>
		</table>
	</fieldset>
<!-- end of connection details -->
		</div>
	</body>
</html>