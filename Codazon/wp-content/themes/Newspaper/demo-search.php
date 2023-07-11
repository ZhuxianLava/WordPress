<?php
/*
 Template Name: Search Scores
 */
get_header();
?>
<!-- Body page Search -->

<!-- Css -->
<style>
	#wrapper {
		width: 100%;
		height: 100%;
		margin: 80px 0;
	}
	#wrapper .body-page-search {
		max-width: 1200px;
		width: auto;
		height: auto;
		margin: auto;
		background: #f1f1f1;
		position: relative;
		padding: 50px 200px;
		border-radius: 50px;
		box-shadow: 0 0 50px #badcf1;
	}

	#wrapper .body-page-search .subtitle h2 {
		font-family: Arial;
		font-size: 20px;
		text-align: center;
		font-weight: 300;
		text-transform: uppercase;
	}
	
	#wrapper .body-page-search .result-search h2 {
		font-family: Roboto;
		font-size: 20px;
		text-align: center;
	}
	#wrapper .body-page-search .result-search h2>span.full_name {
		color: #f36a6a;
		font-weight: 300px;
		font-size: 25px;
		display: block;
	}
	#wrapper .body-page-search .result-search h2>span.full_name #repon_course {
		display: inline-block;
	}
	#wrapper .body-page-search .result-search h2>span.full_name #repon_full_name {
		display: inline-block;
	}
	#wrapper .body-page-search .result-search h2>span.full_name #repon_student_code {
		display: inline-block;
	}
	#wrapper .body-page-search .title h1{
		font-family: Arial;
		font-size: 40px;
		text-align: center;
		font-weight: 500;
		text-transform: uppercase;
	}
	#wrapper .body-page-search .form-lookup {
		margin-top: 50px;
	}
	#wrapper .body-page-search .form-lookup .form-group > label.label-name {
		width: 100%;
	    display: block;
	    font-size: 18px;
	    margin-bottom: 10px;
	}
	#wrapper .body-page-search .form-lookup .form-group >input[type=text] {
		width: 100%;
		height: 40px;
		border-radius: 8px;
		border: 1px solid #c3c1c3;
		margin-bottom: 30px;
	}
	#wrapper .body-page-search .form-lookup .form-group >select#course {
		width: 100%;
		height: 40px;
		border-radius: 8px;
		border: 1px solid #c3c1c3;
		margin-bottom: 30px;
	}
	#wrapper .body-page-search .form-lookup .form-group >input[type=button] {
		background-color: #025180;
		height: 40px;
		width: auto;
		border: none;
		margin-top: 20px;
		padding: 0 20px;
		text-transform: uppercase;
		color: #fff;
		border-radius: 8px;
	}
	#wrapper .body-page-search .form-lookup .form-group .error>p {
		color: #f36a6a;
		margin-top: 10px;
		display: none;
	}
	#wrapper .body-page-search .result-search {
		width: 100%;
		height: auto;
		display: none;
		margin: auto;
	}
	#wrapper .body-page-search .result-search>table {
		border: 1px solid #c3c1c3;
		border-collapse: collapse;
	}
	#wrapper .body-page-search .result-search>table.table>thead>tr>th {
		text-align: center;
	}
	#wrapper .body-page-search .result-search>table.table>tbody>tr>th {
		text-align: center;
	}
	#wrapper .body-page-search .result-search>table.table>tbody>tr {
		text-align: center;
	}

	@media only screen and (max-width: 1200px) {
		#wrapper .body-page-search {
		    max-width: 980px;
		}
	}
	@media only screen and (max-width: 860px) {
		#wrapper .body-page-search {
		    max-width: 800px;
		    padding: 50px 50px;
		}
		#wrapper .body-page-search .title h1 {
		    font-size: 35px;
		    line-height: 50px;
		}
	}
	@media only screen and (max-width: 580px) {
		#wrapper .body-page-search {
		    padding: 50px 20px;
		}
	}
</style>


<div id="wrapper">
	<div class="body-page-search">
		<div class="group-title">
			<div class="subtitle">
				<h2>Trung tâm du học đức trabi</h2>
			</div>
			<div class="title">
				<h1>Hệ thống tra cứu điểm thi trực tuyến</h1>
			</div>
		</div>
		<!-- Form search -->
		<div class="form-lookup">
			<h3>Thí sinh điền đầy đủ các thông tin dưới đây</h3>
			<form action="" method="post">
				<div class="form-group">
					<label class="label-name" for="full_name">Họ và tên</label>
					<input type="text" name="full_name" id="full_name" placeholder="Họ và tên sinh viên">
					<div class="error">
						<p id="error_full_name"></p>
					</div>
				</div>
				<div class="form-group">
					<label class="label-name" for="student_code">CMND/Hộ chiếu</label>
					<input type="text" name="student_code" id="student_code" placeholder="CMND/Hộ chiếu">
					<div class="error">
						<p id="error_student_code"></p>
					</div>
				</div>
				<div class="form-group">
					<label class="label-name" for="course">Trình độ thi</label>
					<select name="course" id="course">
						<option value="Trình độ B1">Trình độ B1</option>
						<option value="Trình độ B2">Trình độ B2</option>
					</select>
					<div class="error">
						<p id="error_course"></p>
					</div>
				</div>
				<div class="form-group">
					<input type="button" value="Tra cứu" id="submit" onclick="Validate()">
				</div>
			</form>
		</div>
		<!-- Result search -->
		<div class="result-search" id="result-search">
                    <div class="table-result">
                        <div class="card">
                            <div class="card-header">
                                <h2>
									<span class="full_name">
										<div id="repon_full_name"></div>
										<div id="repon_student_code"></div>
										<div id="repon_course"></div>
									</span>
								</h2>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>
                                        		Phần thi
                                        	</th>
                                            <th>
                                                Điểm
                                            </th>
                                            <th>
                                                Kết quả
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                    		<td>Phần viết (Schriftliche Prüfung)</td>
                                    		<td>225</td>
                                    		<td><span class="btn btn-success btn-block">Đạt</span></td>
                                    	</tr>
                                    	<tr>
                                    		<td>Phần nói (Mündlich Prüfung)</td>
                                    		<td>75</td>
                                    		<td><span class="btn btn-success btn-block">Đạt</span></td>
                                    	</tr>
					                    <tr>
						                    <td colspan="1">Tổng điểm</td>
						                    <td>300</td>
						                    <td><span class="btn btn-success btn-block">Đạt</span></td>
						                </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
	</div>
</div>

<script>
	var result = document.getElementById('result-search');
	var repon_full_name = document.getElementById('repon_full_name');
	var repon_student_code = document.getElementById('repon_student_code');
	var repon_course = document.getElementById('repon_course');



	var full_name = document.getElementById('full_name');
	var student_code = document.getElementById('student_code');
	var course = document.getElementById('course');

	var error_full_name = document.getElementById('error_full_name');
	var error_student_code = document.getElementById('error_student_code');
	var error_course = document.getElementById('error_course');
	function Validate() {

		if (full_name.value == "") {
			error_full_name.innerHTML = "Vui lòng nhập họ và tên";
			error_full_name.style.display = "block";
			full_name.focus();
			return false;
		} else if (isNaN(full_name.value) == false) {
			error_full_name.innerHTML = "Vui lòng không nhập số";
			error_full_name.style.display = "block";
			full_name.focus();
			return false;
		} 

		if (student_code.value == "") {
			error_student_code.innerHTML = "Vui lòng nhập mã sinh viên";
			error_student_code.style.display = "block";
			student_code.focus();
			return false;
		} else if (isNaN(student_code.value) == true) {
			error_student_code.innerHTML = "Mã sinh viên là một dãy số. </br>VD: 48830";
			error_student_code.style.display = "block";
			student_code.focus();
			return false;
		}
		result.style.display = "block";
		repon_full_name.innerHTML = full_name.value + " -";
		repon_student_code.innerHTML = student_code.value + " -" ;
		repon_course.innerHTML = course.value;
		return true;
	}

	full_name.addEventListener('blur' , function() {
		if (full_name.value != "") {
			error_full_name.style.display = "none";
		} else if (isNaN(full_name.value) == true) {
			error_full_name.style.display = "none";
		}
	}, true );

	student_code.addEventListener('blur' , function() {
		if (student_code.value != "") {
			error_student_code.style.display = "none";
		} else if (isNaN(student_code.value) == true) {
			error_student_code.style.display = "none";
		}
	}, true );

</script>

