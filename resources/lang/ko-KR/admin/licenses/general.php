<?php

return array(
    'about_licenses_title'      => '라이선스 란',
    'about_licenses'            => '라이선스는 소프트웨어를 추적하는데 사용됩니다. 개인에게 반출 할 수 있는 수량이 정의되어 있습니다',
    'checkin'  					=> '라이선스 시트 확인',
    'checkout_history'  		=> '반출 이력',
    'checkout'  				=> '반출 라이선스 시트',
    'edit'  					=> '라이선스 편집',
    'filetype_info'				=> '허용되는 형식들은 png, gif, jpeg, doc, docx, pdf, txt, zip, rar 입니다.',
    'clone'  					=> '라이선스 복제',
    'history_for'  				=> '이력 ',
    'in_out'  					=> '입/출',
    'info'  					=> '라이선스 정보',
    'license_seats'  			=> '라이선스 Seats',
    'seat'  					=> '시트',
    'seats'  					=> '시트',
    'software_licenses'  		=> '소프트웨어 라이선스',
    'user'  					=> '사용자',
    'view'  					=> '라이선스 보기',
    'delete_disabled'           => '일부 라이선스 시트가 반출되어, 해당 라이선스를 삭제할 수 없습니다..',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => '모든 시트 반입',
                'modal'             => '한개의 소프트웨어 시트를 반입힙니다.| 라이선스에 대한 모든 :checkedout_seats_count 반입됩니다.',
                'enabled_tooltip'   => 'Checkin ALL seats for this license from both users and assets',
                'disabled_tooltip'  => '사용자와 자산에 이 라이선스에 대한 모든 시트를 반입합니다.',
                'disabled_tooltip_reassignable'  => '라이선스를 재할당할 수 없기 때문에 비활성화되었습니다.',
                'success'           => '라이선스 반입 성공! | 모든 라이선스 반입 성공!',
                'log_msg'           => '라이선스 GUI에서 일괄 라이선스 반출을 통해 반입됨',
            ],

            'checkout_all'              => [
                'button'                => '모든 시트 반출',
                'modal'                 => '이 작업을 수행하면 가용한 첫 번째 사용자에게 한 시트가 반출됩니다. | 이 작업은 가용한 첫 번째 사용자에게 모든 :available_seats_count 시트을 반출합니다. 사용자가 아직 이 라이선스를 반출하지 않았고 사용자 계정에서 라이선스 자동 할당 속성이 활성화된 경우 이 시트에 사용할 수 있는 것으로 간주됩니다.',
                'enabled_tooltip'   => '모든 사용자에게 모든 좌석(또는 가용한만큼)을 반출하세요.',
                'disabled_tooltip'  => '현재 이용 가능한 시트가 없기 때문에 비활성화되었습니다',
                'success'           => '라이선스 반출 성공! | :count 라이선스가 반출 성공!',
                'error_no_seats'    => '이 라이선스에 남은 시트가 없습니다.',
                'warn_not_enough_seats'    => ':count 라이선스 수량이 사용자에게 할당하였지만 가용한 라이선스 시트가 부족합니다.',
                'warn_no_avail_users'    => '라이선스를 할당받은 사용자가 없어 할 것이 없습니다.',
                'log_msg'           => '라이선스 GUI에서 일괄 라이선스 반출을 통해 반출됨',


            ],
    ],

    'below_threshold' => '이 라이선스에는 최소 수량 :min_amt 로 남은 시트 수량은 :remaining_count 개입니다. 추가 시트 구매 고려할 수 있습니다.',
    'below_threshold_short' => '해당 항목은 최소 요구 수량 미만입니다.',
);
