<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddRatingsToPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasColumn('positions', 'rating')) {
            Schema::table('positions', function (Blueprint $table) {
                $table->unsignedInteger('rating');
            });

            // Denmark
            DB::table('positions')->where('callsign', 'EKAH_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKAH_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKBI_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKBI_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKBI_F_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKCH_E_DEP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKCH_F_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKCH_DEP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKCH_E_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKCH_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'EKCH_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'EKCH_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKCH_A_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKCH_C_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKCH_D_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKCH_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKCH_A_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'EKDK_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EKDK_B_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EKDK_C_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EKDK_D_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EKDK_S_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EKDK_N_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EKDK_V_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EKDK_I_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EKEB_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKKA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKKA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKOD_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKRK_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKRK_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKRN_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKSB_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKSP_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKSP_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKYT_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKYT_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EKYT_F_APP')->update(['rating' => 4]);

            // Finland
            DB::table('positions')->where('callsign', 'EFIN_A_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_B_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_C_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_D_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_E_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_F_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_G_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_H_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_J_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_K_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_L_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_M_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_N_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_V_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_Y_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_Z_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'EFIN_Y_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFIN_Z_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFET_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFHA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFHA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFHK_W_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFHK_E_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFHK_R_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFHK_A_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFHK_E_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFHK_W_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFHK_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'EFHK_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'EFIV_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFIV_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFJO_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFJY_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFJY_R_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFJY_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFJY_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'EFKE_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFKI_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFKK_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFKK_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFKS_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFKS_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFKT_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFKT_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFKT_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFKU_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFKU_R_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFKU_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFLP_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFMA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFMA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFMI_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFOU_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFOU_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFPO_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFPO_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFRO_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFRO_R_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFRO_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFRO_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'EFSA_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFSI_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFTP_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFTP_R_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFTP_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFTP_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'EFTU_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFTU_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFUT_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EFVA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'EFVA_TWR')->update(['rating' => 3]);

            // Iceland
            DB::table('positions')->where('callsign', 'BIRD_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BIRD_1_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BIRD_2_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BIRD_3_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BIRD_4_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BIRD_5_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BIRD_6_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BICC_FSS')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BIKF_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'BIKF_F_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'BIKF_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIKF_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'BIKF_2_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'BIKF_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'BIRK_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'BIRK_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIRK_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'BIAR_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'BIAR_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIIS_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'EKVG_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIVM_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIBA_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIEG_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIBD_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIBL_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIGJ_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIGR_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIHK_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIHN_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIHU_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BINF_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIKR_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIRF_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BITE_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BITN_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BIVO_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BGGL_FSS')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'BGSF_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BGSF_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'BGBW_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BGGH_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BGKK_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BGTL_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'BGTL_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'BGTL_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'BGCO_TWR')->update(['rating' => 3]);

            // Norway
            DB::table('positions')->where('callsign', 'ENAL_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENAL_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENAN_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENAN_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENAT_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENAT_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENBN_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENBD_S_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENBD_9_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENBD_C_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENBD_O_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENBD_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENBD_E_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENBL_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENBN_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENBO_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENBO_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENBO_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENBR_W_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENBR_E_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENBR_D_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENBR_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENBR_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENBR_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENBS_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENBV_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENCN_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENCN_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENDU_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENDU_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENDU_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENEV_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENEV_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENFL_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENGK_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENGM_W_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENGM_E_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENGM_D_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENGM_F_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENGM_W_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENGM_W_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENGM_W_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENGM_E_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENGM_E_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENGM_E_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENGM_Q_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENHD_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENHF_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENHK_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENHV_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENKB_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENKB_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENKR_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENKR_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENLK_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENMH_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENML_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENMS_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENNA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENNA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENNM_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENNO_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENOL_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENOL_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENOL_A_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENOR_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOR_S_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOS_1_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOS_2_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOS_3_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOS_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOS_5_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOS_N_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOS_7_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOS_8_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENOV_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENRA_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENRM_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENRO_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENRS_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENRY_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENRY_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENRY_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENSD_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENSG_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENSH_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENSK_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENSO_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENSR_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENSS_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENST_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENSV_O_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENSV_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENSV_N_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENSV_5_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENSV_4_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENSV_E_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENSV_0_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENTC_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENTC_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENTO_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENTO_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENTO_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENVA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENVA_D_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENVA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENVA_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENVD_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENZV_A_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENZV_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENZV_D_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ENZV_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENZV_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ENAS_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENOB_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ENSA_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ENSB_I_TWR')->update(['rating' => 3]);

            // Sweden
            DB::table('positions')->where('callsign', 'ESCF_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESCF_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESCM_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESCM_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESCR_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESDF_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESDF_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESDF_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESDK_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESFR_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESFR_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESGG_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESGG_E_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESGG_W_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESGG_A_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESGG_X_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESGG_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESGG_X_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESGG_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESGG_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESGJ_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESGP_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESGR_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESGT_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESIA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESIA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESIB_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESIB_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESIB_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESKM_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESKN_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESKS_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESMK_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESMM_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_7_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_5_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_3_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_2_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_6_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_4_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_8_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_9_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_C_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_K_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_W_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_Y_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMM_X_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESMQ_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESMS_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESMS_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESMS_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESMT_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESMV_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESMV_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESMX_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESND_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNG_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNJ_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNJ_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESNK_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNL_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNN_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNO_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNQ_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNS_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNU_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNV_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNX_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESNZ_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESOE_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESOH_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESOK_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESOS_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_6_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_1_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_3_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_4_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_2_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_8_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_F_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_7_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_K_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_N_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_Y_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_X_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOS_9_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESOW_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESOW_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESPA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESPA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESPE_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESPE_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESPF_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESSA_W_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSA_E_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSA_W_DEP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSA_F_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSA_A_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSA_X_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSA_W_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSA_E_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSA_S_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSA_X_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSA_N_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESSA_W_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESSA_E_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESSA_DEL')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESSA_E_DEP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSB_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSB_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSB_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESSD_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSL_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSP_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESSP_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSR_CTR')->update(['rating' => 5]);
            DB::table('positions')->where('callsign', 'ESST_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSU_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSV_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESSV_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESTA_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESTA_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESTL_GND')->update(['rating' => 2]);
            DB::table('positions')->where('callsign', 'ESTL_APP')->update(['rating' => 4]);
            DB::table('positions')->where('callsign', 'ESTL_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESUP_I_TWR')->update(['rating' => 3]);
            DB::table('positions')->where('callsign', 'ESUT_I_TWR')->update(['rating' => 3]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->dropColumn('rating');
        });
    }
}
