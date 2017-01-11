<div id="wrap">
	<div id="header-left">
		<h1 class="logo">
			<a href="/">
					<span class="sr-only">
						TCK 비즈 메시지센터
						<span class="small">trans cosmos korea biz message center</span>
					</span>
			</a>
		</h1>
		<div class="lnb">
			<ul class="lnb-list">
				<li class="eq-0 <?php if(getDepthId($pagePath, 0) == "setting"){ ?>active<?php } ?>">
					<a href="#">
						<span>운영설정</span>
					</a>
					<ul>
						<li <?php if(getDepthId($pagePath, 0) == "setting"){ ?>
							<?php if(getDepthId($pagePath, 1) == "1"){ ?>
								class="active"
							<?php } ?>
						<?php } ?>>
							<a href="setting-1.php">
									<span>
										상담 운영 설정
									</span>
							</a>
						</li>
						<li <?php if(getDepthId($pagePath, 0) == "setting"){ ?>
							<?php if(getDepthId($pagePath, 1) == "2"){ ?>
								class="active"
							<?php } ?>
						<?php } ?>>
							<a href="setting-2.php">
									<span>
										챗봇 설정
									</span>
							</a>
						</li>
						<li <?php if(getDepthId($pagePath, 0) == "setting"){ ?>
							<?php if(getDepthId($pagePath, 1) == "3"){ ?>
								class="active"
							<?php } ?>
						<?php } ?>>
							<a href="setting-3.php">
									<span>
										과금 보기
									</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="eq-1 <?php if(getDepthId($pagePath, 0) == "bill"){ ?>active<?php } ?>">
					<a href="bill.php">
						<span>과금내역</span>
					</a>
				</li>
				<li class="eq-2 <?php if(getDepthId($pagePath, 0) == "stats"){ ?>active<?php }else if(getDepthId($pagePath, 0) == "dashboard"){ ?>active<?php } ?>">
					<a href="stats-stats.php">
						<span>통계지표</span>
					</a>
					<ul>
						<li <?php if(getDepthId($pagePath, 0) == "stats"){ ?>
							<?php if(getDepthId($pagePath, 1) == "stats"){ ?>
								class="active"
							<?php } ?>
						<?php } ?>>
							<a href="stats-stats.php">
									<span>
										통계
									</span>
							</a>
						</li>
						<li <?php if(getDepthId($pagePath, 0) == "stats"){ ?>
								<?php if(getDepthId($pagePath, 1) == "dashboard"){ ?>
									class="active"
								<?php } ?>
						<?php } ?>>
							<a href="stats-dashboard.php">
									<span>
										대시보드
									</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="eq-3 <?php if(getDepthId($pagePath, 0) == "rawdate"){ ?>active<?php } ?>">
					<a href="rawdate-1.php">
						<span>Rawdate</span>
					</a>
					<ul>
						<li <?php if(getDepthId($pagePath, 0) == "rawdate"){ ?>
							<?php if(getDepthId($pagePath, 1) == "1"){ ?>
								class="active"
							<?php } ?>
						<?php } ?>>
							<a href="rawdate-1.php">
								<span>
									데이터 보관
								</span>
							</a>
						</li>
						<li <?php if(getDepthId($pagePath, 0) == "rawdate"){ ?>
							<?php if(getDepthId($pagePath, 1) == "2"){ ?>
								class="active"
							<?php } ?>
						<?php } ?>>
							<a href="rawdate-2.php">
								<span>
									rawdata
								</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="eq-4 <?php if(getDepthId($pagePath, 0) == "master"){ ?>active<?php } ?>">
					<a href="master.php">
						<span>마스터 메뉴</span>
					</a>
					<ul>
						<li <?php if(getDepthId($pagePath, 0) == "master"){ ?>
							<?php if(getDepthId($pagePath, 1) == "admin"){ ?>
								class="active"
							<?php } ?>
						<?php } ?>>
							<a href="master-admin.php">
									<span>
										조직 및 계정 관리
									</span>
							</a>
						</li>
						<li <?php if(getDepthId($pagePath, 0) == "master"){ ?>
							<?php if(getDepthId($pagePath, 1) == "notice"){ ?>
								class="active"
							<?php } ?>
						<?php } ?>>
							<a href="master-notice.php">
									<span>
										공지사항
									</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<a href="#" class="header-left-control">
			<span class="sr-only">
				header-left controller
			</span>
		</a>
	</div>
	<div id="header-top">
		<div class="gnb">
			<ul>
				<li class="eq-0">
					<span class="company">
						트랜스코스모스코리아
					</span>
				</li>
				<li class="eq-1 individual">
					<span class="name">김유신</span>
					님 환영합니다.

					<ul class="individual-list">
						<li>
							<a href="#">
								로그아웃
							</a>
						</li>
						<!--
						<li>
							<a href="#">
								로그인
							</a>
						</li>
						-->
						<li>
							<a href="#">
								내정보
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="member">
			<a href="login.php">
				<span class="sr-only">member</span>
			</a>
		</div>
	</div>
	<!-- /#header -->
	<div id="container">