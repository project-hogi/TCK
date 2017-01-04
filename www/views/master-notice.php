<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

	<form action="">
		<div class="search-box">
			<div class="select-box w120">
				<label for="select" class="select-label"><span>제목</span></label>
				<select name="" id="select" class="form-control">
					<option value="">제목</option>
					<option value="">내용</option>
					<option value="">작성자</option>
				</select>
			</div>
			<button type="submit" class="submit-btn">
				<span class="sr-only">
					검색버튼
				</span>
			</button>
			<button type="button" data-toggle="modal" data-target="#new-project-popup" class="all-btn">
				글쓰기
			</button>
			<button type="button" data-toggle="modal" data-target="#new-project-popup" class="all-btn">
				수정
			</button>
			<button type="button" data-toggle="modal" data-target="#new-project-popup" class="all-btn">
				삭제
			</button>
		</div>
	</form>
	<div class="result-box">
		<table class="table-primary disable-rowline">
			<thead>
			<tr>
				<th>번호</th>
				<th>제목</th>
				<th>작성자</th>
				<th>첨부</th>
				<th>크기</th>
				<th>조회</th>
				<th>작성일</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>01</td>
				<td><a data-toggle="modal" href="#conpopup">공지사항입니다</a></td>
				<td>Tom</td>
				<td>유</td>
				<td>3.44kb</td>
				<td>11</td>
				<td>17-01-03</td>
			</tr>
			<tr>
				<td>02</td>
				<td><a data-toggle="modal" href="#conpopup">공지사항입니다</a></td>
				<td>Tom</td>
				<td>무</td>
				<td>3.44kb</td>
				<td>11</td>
				<td>17-01-03</td>
			</tr>
			<tr>
				<td>03</td>
				<td><a data-toggle="modal" href="#conpopup">공지사항입니다</a></td>
				<td>Tom</td>
				<td>유</td>
				<td>3.44kb</td>
				<td>11</td>
				<td>17-01-03</td>
			</tr>
			<tr>
				<td>04</td>
				<td><a data-toggle="modal" href="#conpopup">공지사항입니다</a></td>
				<td>Tom</td>
				<td>무</td>
				<td>3.44kb</td>
				<td>11</td>
				<td>17-01-03</td>
			</tr>
			<tr>
				<td>05</td>
				<td><a data-toggle="modal" href="#conpopup">공지사항입니다</a></td>
				<td>Tom</td>
				<td>무</td>
				<td>3.44kb</td>
				<td>11</td>
				<td>17-01-03</td>
			</tr>
			<tr>
				<td>06</td>
				<td><a data-toggle="modal" href="#conpopup">공지사항입니다</a></td>
				<td>Tom</td>
				<td>유</td>
				<td>3.44kb</td>
				<td>11</td>
				<td>17-01-03</td>
			</tr>
			<tr>
				<td>07</td>
				<td><a data-toggle="modal" href="#conpopup">공지사항입니다</a></td>
				<td>Tom</td>
				<td>유</td>
				<td>3.44kb</td>
				<td>11</td>
				<td>17-01-03</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="result-foot">
		<div class="page-control">
			<a href="#" class="prev">이전</a>
			<ul class="pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
			<a href="#" class="next">다음</a>
		</div>
	</div>




<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>


<!-- 팝업 -->
<div id="new-project-popup" role="dialog" class="modal fade">
	<div class="modal-dialog">
		<div id="detail-popup" class="modal-content">
			<h2 class="sr-only">
				팝업창
			</h2>
			<div class="head">
				<h3 class="title">프로젝트 글쓰기</h3>
				<a href="#" class="close-popup" data-dismiss="modal">
					<span class="sr-only">
						팝업 닫기
					</span>
				</a>
			</div>
			<div class="cont">
				<div class="cont-box">
					<table class="table-primary">
						<tbody>
						<tr>
							<th>
								<label for="">제목</label>
							</th>
							<td>
								<div class="form-group w100p">
									<input type="text" class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<th>
								<label for="">작성자</label>
							</th>
							<td>
								<div class="form-group w240">
									<input type="text" class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<th>
								<label for="">내용</label>
							</th>
							<td>
								<div class="form-group w100p">
									<div class="textarea-style">

									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>
								<label for="">첨부파일</label>
							</th>
							<td>
								<div class="form-group filebox">
									<input class="upload-name" value="" disabled="disabled">
									<label for="files"><span>파일찾기</span></label>
									<input type="file" name="files" id="files" class="form-control upload-hidden">
								</div>
							</td>
						</tr>
						<tr>
							<th>
								<label for="">비밀번호</label>
							</th>
							<td>
								<div class="form-group">
									<div class="col-xs-6">
										<input type="password" class="form-control">
									</div>
									<div class="col-xs-6">
										<span class="pre">영문,숫자 조합하여 최대 4자입력 가능</span>
									</div>
								</div>
							</td>
						</tr>
						</tbody>
					</table>


					<div class="submit-area">
						<button type="submit" class="submit">
							확인
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //팝업 -->

<!-- 팝업 -->
<div id="conpopup" role="dialog" class="modal fade">
	<div class="modal-dialog">
		<div id="detail-popup" class="modal-content">
			<h2 class="sr-only">
				팝업창
			</h2>
			<div class="head">
				<ul class="tool-list">
					<li class="edit">
						<a href="#">
						<span>
							수정
						</span>
						</a>
					</li>
					<li class="delete">
						<a href="#">
						<span>
							삭제
						</span>
						</a>
					</li>
					<li class="comment">
						<a href="#">
						<span>
							댓글
						</span>
						</a>
					</li>
					<li class="print">
						<a href="#">
						<span>
							인쇄
						</span>
						</a>
					</li>
				</ul>
				<a href="#" class="close-popup" data-dismiss="modal">
					<span class="sr-only">
						팝업 닫기
					</span>
				</a>
			</div>
			<div class="cont">
				<div class="cont-box">
					<div class="notice-detail">
						<h3 class="title">
							공지사항입니다
						</h3>
						<ul class="writer-info">
							<li class="name">
								작성자
								<span>
								TCK마스터
							</span>
							</li>
							<li class="time">
								작성일
								<span>
								2017-01-01 20:50
							</span>
							</li>
							<li class="count">
								조회수
								<span>
							230
							</span>
							</li>
						</ul>
						<div class="textarea-style">
							<div class="inner-wrap">
								&lt;공지사항&gt;<br>
								공지사항입니다.<br>
								.<br>
								.<br>
								.<br>
								.<br>
								감사합니다.<br>
							</div>
						</div>
						<ul class="comment-list">
							<li>알겠습니다.<span class="name">홍길동</span><span class="datetime">2017/01/03 14:00:00</span></li>
							<li>알겠습니다.<span class="name">홍길동</span><span class="datetime">2017/01/03 14:00:00</span></li>
							<li>알겠습니다.<span class="name">홍길동</span><span class="datetime">2017/01/03 14:00:00</span></li>
							<li>알겠습니다.<span class="name">홍길동</span><span class="datetime">2017/01/03 14:00:00</span></li>
							<li>알겠습니다.<span class="name">홍길동</span><span class="datetime">2017/01/03 14:00:00</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //팝업 -->
