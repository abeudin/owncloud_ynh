<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "매핑을 비울 수 없습니다.",
"Failed to delete the server configuration" => "서버 설정을 삭제할 수 없습니다.",
"The configuration is valid and the connection could be established!" => "설정 정보가 올바르고 연결할 수 있습니다!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "설정 정보가 올바르지만 바인딩이 실패하였습니다. 서버 설정과 인증 정보를 확인하십시오.",
"The configuration is invalid. Please have a look at the logs for further details." => "설정이 올바르지 않습니다. 자세한 사항은 로그를 참고하십시오.",
"No action specified" => "동작이 지정되지 않음",
"No configuration specified" => "설정이 지정되지 않음",
"No data specified" => "데이터가 지정되지 않음",
" Could not set configuration %s" => " 설정 %s을(를) 지정할 수 없음",
"Deletion failed" => "삭제 실패",
"Take over settings from recent server configuration?" => "최근 서버 설정을 다시 불러오시겠습니까?",
"Keep settings?" => "설정을 유지하겠습니까?",
"Cannot add server configuration" => "서버 설정을 추가할 수 없음",
"mappings cleared" => "매핑 삭제됨",
"Success" => "성공",
"Error" => "오류",
"Configuration OK" => "설정 올바름",
"Configuration incorrect" => "설정 올바르지 않음",
"Configuration incomplete" => "설정 불완전함",
"Select groups" => "그룹 선택",
"Select object classes" => "객체 클래스 선택",
"Select attributes" => "속성 선택",
"Connection test succeeded" => "연결 시험 성공",
"Connection test failed" => "연결 시험 실패",
"Do you really want to delete the current Server Configuration?" => "현재 서버 설정을 지우시겠습니까?",
"Confirm Deletion" => "삭제 확인",
"_%s group found_::_%s groups found_" => array("그룹 %s개 찾음"),
"_%s user found_::_%s users found_" => array("사용자 %s명 찾음"),
"Invalid Host" => "잘못된 호스트",
"Could not find the desired feature" => "필요한 기능을 찾을 수 없음",
"Group Filter" => "그룹 필터",
"Save" => "저장",
"Test Configuration" => "설정 시험",
"Help" => "도움말",
"only those object classes:" => "다음 객체 클래스만:",
"only from those groups:" => "다음 그룹에서만:",
"Edit raw filter instead" => "필터 직접 편집",
"Raw LDAP filter" => "LDAP 필터",
"The filter specifies which LDAP groups shall have access to the %s instance." => "이 필터는 %s에 접근할 수 있는 LDAP 그룹을 설정합니다.",
"groups found" => "그룹 찾음",
"LDAP Username:" => "LDAP 사용자 이름:",
"LDAP Email Address:" => "LDAP 이메일 주소:",
"Other Attributes:" => "기타 속성:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "로그인을 시도할 때 적용할 필터를 입력하십시오. %%uid는 로그인 동작의 사용자 이름으로 대체됩니다. 예: \"uid=%%uid\"",
"Add Server Configuration" => "서버 설정 추가",
"Host" => "호스트",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "SSL을 사용하지 않으면 프로토콜을 입력하지 않아도 됩니다. SSL을 사용하려면 ldaps://를 입력하십시오.",
"Port" => "포트",
"User DN" => "사용자 DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "바인딩 작업을 수행할 클라이언트 사용자 DN입니다. 예를 들어서 uid=agent,dc=example,dc=com입니다. 익명 접근을 허용하려면 DN과 암호를 비워 두십시오.",
"Password" => "암호",
"For anonymous access, leave DN and Password empty." => "익명 접근을 허용하려면 DN과 암호를 비워 두십시오.",
"One Base DN per line" => "기본 DN을 한 줄에 하나씩 입력하십시오",
"You can specify Base DN for users and groups in the Advanced tab" => "고급 탭에서 사용자 및 그룹에 대한 기본 DN을 지정할 수 있습니다.",
"The filter specifies which LDAP users shall have access to the %s instance." => "이 필터는 %s에 접근할 수 있는 LDAP 사용자를 설정합니다.",
"users found" => "사용자 찾음",
"Back" => "뒤로",
"Continue" => "계속",
"Advanced" => "고급",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>경고:</b> user_ldap, user_webdavauth 앱은 서로 호환되지 않습니다. 예상하지 못한 행동을 할 수도 있습니다. 시스템 관리자에게 연락하여 둘 중 하나의 앱의 사용을 중단하십시오.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>경고:</b> PHP LDAP 모듈이 비활성화되어 있거나 설치되어 있지 않습니다. 백엔드를 사용할 수 없습니다. 시스템 관리자에게 설치를 요청하십시오.",
"Connection Settings" => "연결 설정",
"Configuration Active" => "구성 활성",
"When unchecked, this configuration will be skipped." => "선택하지 않으면 이 설정을 무시합니다.",
"Backup (Replica) Host" => "백업 (복제) 호스트",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "추가적인 백업 호스트를 지정합니다. 기본 LDAP/AD 서버의 복사본이어야 합니다.",
"Backup (Replica) Port" => "백업 (복제) 포트",
"Disable Main Server" => "주 서버 비활성화",
"Only connect to the replica server." => "복제 서버에만 연결합니다.",
"Turn off SSL certificate validation." => "SSL 인증서 유효성 검사를 해제합니다.",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "테스트 목적으로만 사용하십시오! 이 옵션을 사용해야만 연결할 수 있으면 %s 서버에 LDAP 서버의 SSL 인증서를 설치하십시오.",
"Cache Time-To-Live" => "캐시 유지 시간",
"in seconds. A change empties the cache." => "초 단위입니다. 항목 변경 시 캐시가 갱신됩니다.",
"Directory Settings" => "디렉터리 설정",
"User Display Name Field" => "사용자의 표시 이름 필드",
"The LDAP attribute to use to generate the user's display name." => "사용자 표시 이름을 생성할 때 사용할 LDAP 속성입니다.",
"Base User Tree" => "기본 사용자 트리",
"One User Base DN per line" => "사용자 DN을 한 줄에 하나씩 입력하십시오",
"User Search Attributes" => "사용자 검색 속성",
"Optional; one attribute per line" => "추가적, 한 줄에 하나의 속성을 입력하십시오",
"Group Display Name Field" => "그룹의 표시 이름 필드",
"The LDAP attribute to use to generate the groups's display name." => "그룹 표시 이름을 생성할 때 사용할 LDAP 속성입니다.",
"Base Group Tree" => "기본 그룹 트리",
"One Group Base DN per line" => "그룹 기본 DN을 한 줄에 하나씩 입력하십시오",
"Group Search Attributes" => "그룹 검색 속성",
"Group-Member association" => "그룹-회원 연결",
"Special Attributes" => "특수 속성",
"Quota Field" => "할당량 필드",
"Quota Default" => "기본 할당량",
"in bytes" => "바이트 단위",
"Email Field" => "이메일 필드",
"User Home Folder Naming Rule" => "사용자 홈 폴더 이름 규칙",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "사용자 이름을 사용하려면 비워 두십시오(기본값). 기타 경우 LDAP/AD 속성을 지정하십시오.",
"Internal Username" => "내부 사용자 이름",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "기본적으로 내부 사용자 이름은 UUID 속성에서 생성됩니다. 사용자 이름이 중복되지 않고 문자열을 변환할 필요가 없도록 합니다. 내부 사용자 이름에는 다음과 같은 문자열만 사용할 수 있습니다: [a-zA-Z0-9_.@-] 다른 문자열은 ASCII에 해당하는 문자열로 변경되거나 없는 글자로 취급됩니다. 충돌하는 경우 숫자가 붙거나 증가합니다. 내부 사용자 이름은 내부적으로 사용자를 식별하는 데 사용되며, 사용자 홈 폴더의 기본 이름입니다. 또한 *DAV와 같은 외부 URL의 일부로 사용됩니다. 이 설정을 사용하면 기본 설정을 재정의할 수 있습니다. ownCloud 5 이전의 행동을 사용하려면 아래 필드에 사용자의 표시 이름 속성을 입력하십시오. 비워 두면 기본 설정을 사용합니다. 새로 추가되거나 매핑된 LDAP 사용자에게만 적용됩니다.",
"Internal Username Attribute:" => "내부 사용자 이름 속성:",
"Override UUID detection" => "UUID 확인 재정의",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "기본적으로 UUID 속성은 자동적으로 감지됩니다. UUID 속성은 LDAP 사용자와 그룹을 정확히 식별하는 데 사용됩니다. 지정하지 않은 경우 내부 사용자 이름은 UUID를 기반으로 생성됩니다. 이 설정을 다시 정의하고 임의의 속성을 지정할 수 있습니다. 사용자와 그룹 모두에게 속성을 적용할 수 있고 중복된 값이 없는지 확인하십시오. 비워 두면 기본 설정을 사용합니다. 새로 추가되거나 매핑된 LDAP 사용자와 그룹에만 적용됩니다.",
"UUID Attribute for Users:" => "사용자 UUID 속성:",
"UUID Attribute for Groups:" => "그룹 UUID 속성:",
"Username-LDAP User Mapping" => "사용자 이름-LDAP 사용자 매핑",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "사용자 이름은 (메타) 데이터를 저장하고 할당하는 데 사용됩니다. 사용자를 정확하게 식별하기 위하여 각각 LDAP 사용자는 내부 사용자 이름을 갖습니다. 이는 사용자 이름과 LDAP 사용자 간의 매핑이 필요합니다. 생성된 사용자 이름은 LDAP 사용자의 UUID로 매핑됩니다. 추가적으로 LDAP 통신을 줄이기 위해서 DN이 캐시에 저장되지만 식별에 사용되지는 않습니다. DN이 변경되면 변경 사항이 기록됩니다. 내부 사용자 이름은 계속 사용됩니다. 매핑을 비우면 흔적이 남아 있게 됩니다. 매핑을 비우는 작업은 모든 LDAP 설정에 영향을 줍니다! 테스트 및 실험 단계에만 사용하고, 사용 중인 서버에서는 시도하지 마십시오.",
"Clear Username-LDAP User Mapping" => "사용자 이름-LDAP 사용자 매핑 비우기",
"Clear Groupname-LDAP Group Mapping" => "그룹 이름-LDAP 그룹 매핑 비우기"
);
$PLURAL_FORMS = "nplurals=1; plural=0;";
