<?php

use Illuminate\Support\Facades\Route;


/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {

    route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);


    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware('Administrador');
        Route::get('admin/user/activity/{id}', ['as' => 'admin.user.activity', 'uses' => 'Admin\UserController@activity'])->withoutMiddleware('Administrador');

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware('Administrador');
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware('Administrador');

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */


        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);
        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */

        /**funcionários */
        Route::get('admin/funcionários/list', ['as' => 'admin.employees.index', 'uses' => 'Admin\EmployeeController@index']);
        Route::get('admin/funcionários/create', ['as' => 'admin.employees.create', 'uses' => 'Admin\EmployeeController@create']);
        Route::post('admin/funcionários/store', ['as' => 'admin.employees.store', 'uses' => 'Admin\EmployeeController@store']);
        Route::get('admin/funcionários/edit/{id}', ['as' => 'admin.employees.edit.index', 'uses' => 'Admin\EmployeeController@edit']);
        Route::put('admin/funcionários/update/{id}', ['as' => 'admin.employees.update', 'uses' => 'Admin\EmployeeController@update']);
        Route::get('admin/funcionários/delete/{id}', ['as' => 'admin.employees.delete', 'uses' => 'Admin\EmployeeController@destroy']);
        Route::get('admin/funcionários/show/{id}', ['as' => 'admin.employees.show', 'uses' => 'Admin\EmployeeController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
         Route::get('admin/funcionários/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
       */
        /**End funcionários */

       /**InspectionTeamController */
        Route::get('admin/inspections/list', ['as' => 'admin.inspections.index', 'uses' => 'Admin\InspectionTeamController@index']);
        Route::get('admin/inspections/create', ['as' => 'admin.inspections.create', 'uses' => 'Admin\InspectionTeamController@create']);
        Route::post('admin/inspections/store', ['as' => 'admin.inspections.store', 'uses' => 'Admin\InspectionTeamController@store']);
        Route::get('admin/inspections/edit/{id}', ['as' => 'admin.inspections.edit.index', 'uses' => 'Admin\InspectionTeamController@edit']);
        Route::put('admin/inspections/update/{id}', ['as' => 'admin.inspections.update', 'uses' => 'Admin\InspectionTeamController@update']);
        Route::get('admin/inspections/delete/{id}', ['as' => 'admin.inspections.delete', 'uses' => 'Admin\InspectionTeamController@destroy']);
        Route::get('admin/inspections/show/{id}', ['as' => 'admin.inspections.show', 'uses' => 'Admin\InspectionTeamController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
         Route::get('admin/funcionários/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
       */
        /**End InspectionTeamController */




    });

    Route::middleware(['ManagerFinancial'])->group(function () {
        /**Statistic */

        Route::get('admin/estatísticas-Geral/list', ['as' => 'admin.generalStatistics.index', 'uses' => 'Admin\GeneralStatisticController@index']);
        Route::get('admin/estatísticas-por-seccao/list', ['as' => 'admin.statisticsSection.index', 'uses' => 'Admin\StatisticController@index']);
        Route::get('admin/estatísticas-por-seccao/list-2', ['as' => 'admin.statisticsSection1.index', 'uses' => 'Admin\StatisticController@statistic']);
        Route::get('admin/estatísticas-por-seccao/list-3', ['as' => 'admin.statisticsSection2.index', 'uses' => 'Admin\StatisticController@statistic3']);


        Route::post('admin/estatísticas-ano/list', ['as' => 'admin.StatistiYerar.store', 'uses' => 'Admin\StatistiYerar@store']);
        Route::get('admin/estatísticas-por-ano/{id}', ['as' => 'admin.StatistiYerar.show', 'uses' => 'Admin\StatistiYerar@show']);
        Route::get('admin/estatísticas-por-seccao/list-2', ['as' => 'admin.statisticsSection1.index', 'uses' => 'Admin\StatisticController@statistic']);
        Route::get('admin/estatísticas-por-seccao/list-3', ['as' => 'admin.statisticsSection2.index', 'uses' => 'Admin\StatisticController@statistic3']);
        /**End Statistic */

        /**Payments*/
        Route::get('admin/pagamentos/list', ['as' => 'admin.payments.index', 'uses' => 'Admin\PaymentsController@index']);
        Route::get('admin/pagamentos/show/{id}', ['as' => 'admin.payments.show', 'uses' => 'Admin\PaymentsController@show']);
        Route::get('admin/pagamentos/relatorios', ['as' => 'admin.payments.report', 'uses' => 'Admin\PaymentsController@printPayment']);

        /* fatura de Pagamento de Serviço */
        Route::get('admin/pagamentos/fatura/{code}/{service}/{value}/{client}/{status}/{nif}/{lastUpdate}', ['as' => 'admin.payments.invoice', 'uses' => 'Admin\InvoiceController@index']);
        /**End Payments*/

        /** Clients */
        Route::get('admin/client/index', ['as' => 'admin.client.create.index', 'uses' => 'Admin\ClientsController@create']);
        Route::get('admin/client/list', ['as' => 'admin.client.list.index', 'uses' => 'Admin\ClientsController@index']);
        Route::post('admin/client/store', ['as' => 'admin.client.store', 'uses' => 'Admin\ClientsController@store']);
        Route::get('admin/client/show/{id}', ['as' => 'admin.client.show', 'uses' => 'Admin\ClientsController@show']);
        Route::get('admin/client/edit/{id}', ['as' => 'admin.client.edit.index', 'uses' => 'Admin\ClientsController@edit']);
        Route::get('admin/client/delete/{id}', ['as' => 'admin.client.delete', 'uses' => 'Admin\ClientsController@destroy']);
        Route::put('admin/client/update/{id}', ['as' => 'admin.client.update', 'uses' => 'Admin\ClientsController@update']);

        //Relatórios PDF
        Route::get('admin/clients/relatorios', ['as' => 'admin.clients.report', 'uses' => 'Admin\ClientsController@printClient']);
        /**End Clients */

       /** inspections */
        Route::get('admin/inspection/index', ['as' => 'admin.inspection.create.index', 'uses' => 'Admin\InspectionsController@create']);
        Route::get('admin/inspection/list', ['as' => 'admin.inspection.list.index', 'uses' => 'Admin\InspectionsController@index']);
        Route::post('admin/inspection/store', ['as' => 'admin.inspection.store', 'uses' => 'Admin\InspectionsController@store']);
        Route::get('admin/inspection/show/{id}', ['as' => 'admin.inspection.show', 'uses' => 'Admin\InspectionsController@show']);
        Route::get('admin/inspection/edit/{id}', ['as' => 'admin.inspection.edit.index', 'uses' => 'Admin\InspectionsController@edit']);
        Route::get('admin/inspection/delete/{id}', ['as' => 'admin.inspection.delete', 'uses' => 'Admin\InspectionsController@destroy']);
        Route::put('admin/inspection/update/{id}', ['as' => 'admin.inspection.update', 'uses' => 'Admin\InspectionsController@update']);

        //Relatórios PDF
        Route::get('admin/inspections/relatorios', ['as' => 'admin.inspections.report', 'uses' => 'Admin\InspectionsController@printInspections']);
        /**End  */


        /**Startups */
        Route::get('admin/startup/index', ['as' => 'admin.startup.create.index', 'uses' => 'Admin\StartupsController@create']);
        Route::get('admin/startup/list', ['as' => 'admin.startup.list.index', 'uses' => 'Admin\StartupsController@index']);
        Route::post('admin/startup/store', ['as' => 'admin.startup.store', 'uses' => 'Admin\StartupsController@store']);
        Route::get('admin/startup/edit/{id}', ['as' => 'admin.startup.edit.index', 'uses' => 'Admin\StartupsController@edit']);
        Route::put('admin/startup/update/{id}', ['as' => 'admin.startup.update', 'uses' => 'Admin\StartupsController@update']);
        Route::get('admin/startup/delete/{id}', ['as' => 'admin.startup.delete', 'uses' => 'Admin\StartupsController@destroy']);
        Route::get('admin/startup/show/{id}', ['as' => 'admin.startup.show', 'uses' => 'Admin\StartupsController@show']);

        Route::get('admin/startup/print/{id}', ['as' => 'admin.startup.print', 'uses' => 'Admin\StartupsController@print']);
        /**End Startups */


        /**Autnspection */
        Route::get('admin/autinspection/index', ['as' => 'admin.autinspection.create.index', 'uses' => 'Admin\AutnspectionsController@create']);
        Route::get('admin/autinspection/list', ['as' => 'admin.autinspection.list.index', 'uses' => 'Admin\AutnspectionsController@index']);
        Route::post('admin/autinspection/store', ['as' => 'admin.autinspection.store', 'uses' => 'Admin\AutnspectionsController@store']);
        Route::get('admin/autinspection/edit/{id}', ['as' => 'admin.autinspection.edit.index', 'uses' => 'Admin\AutnspectionsController@edit']);
        Route::put('admin/autinspection/update/{id}', ['as' => 'admin.autinspection.update', 'uses' => 'Admin\AutnspectionsController@update']);
        Route::get('admin/autinspection/delete/{id}', ['as' => 'admin.autinspection.delete', 'uses' => 'Admin\AutnspectionsController@destroy']);
        Route::get('admin/autinspection/show/{id}', ['as' => 'admin.autinspection.show', 'uses' => 'Admin\AutnspectionsController@show']);

        Route::get('admin/autinspection/print/{id}', ['as' => 'admin.autinspection.print', 'uses' => 'Admin\AutnspectionsController@print']);
        /**End Autnspection */

        /**schedule */
        Route::get('admin/schedule/index', ['as' => 'admin.schedule.create.index', 'uses' => 'Admin\SchedulesController@create']);
        Route::get('admin/schedule/list', ['as' => 'admin.schedule.list.index', 'uses' => 'Admin\SchedulesController@index']);
        Route::post('admin/schedule/store', ['as' => 'admin.schedule.store', 'uses' => 'Admin\SchedulesController@store']);
        Route::get('admin/schedule/edit/{id}', ['as' => 'admin.schedule.edit.index', 'uses' => 'Admin\SchedulesController@edit']);
        Route::put('admin/schedule/update/{id}', ['as' => 'admin.schedule.update', 'uses' => 'Admin\SchedulesController@update']);
        Route::get('admin/schedule/delete/{id}', ['as' => 'admin.schedule.delete', 'uses' => 'Admin\SchedulesController@destroy']);
        Route::get('admin/schedule/show/{id}', ['as' => 'admin.schedule.show', 'uses' => 'Admin\SchedulesController@show']);

        Route::get('admin/schedule/print/{id}', ['as' => 'admin.schedule.print', 'uses' => 'Admin\SchedulesController@print']);
        /**End schedule */











        /**Cowork */
        Route::get('admin/cowork/index', ['as' => 'admin.coworks.create.index', 'uses' => 'Admin\CoworkController@create']);
        Route::get('admin/cowork/list', ['as' => 'admin.coworks.list.index', 'uses' => 'Admin\CoworkController@index']);
        Route::post('admin/cowork/store', ['as' => 'admin.coworks.store', 'uses' => 'Admin\CoworkController@store']);
        Route::get('admin/cowork/show/{id}', ['as' => 'admin.coworks.show', 'uses' => 'Admin\CoworkController@show']);
        Route::get('admin/cowork/delete/{id}', ['as' => 'admin.coworks.delete', 'uses' => 'Admin\CoworkController@destroy']);
        Route::put('admin/cowork/update/{id}', ['as' => 'admin.coworks.update', 'uses' => 'Admin\CoworkController@update']);
        Route::get('admin/cowork/edit/{id}', ['as' => 'admin.coworks.edit.index', 'uses' => 'Admin\CoworkController@edit']);

        /**End Cowork */

        /**Member Cowork*/
        Route::get('admin/memberCowork/print/{id}', ['as' => 'admin.memberCowork.print', 'uses' => 'Admin\CoworksMemberController@print']);
        Route::get('admin/memberCowork/qrcode/{id}', ['as' => 'admin.memberCowork.qrcode', 'uses' => 'Admin\CoworksMemberController@qrcode']);
        Route::get('admin/memberCowork/create/{id}', ['as' => 'admin.memberCowork.create', 'uses' => 'Admin\CoworksMemberController@create']);
        Route::post('admin/memberCowork/store/{id}', ['as' => 'admin.memberCowork.store', 'uses' => 'Admin\CoworksMemberController@store']);
        Route::get('admin/memberCowork/delete/{id}', ['as' => 'admin.memberCowork.delete', 'uses' => 'Admin\CoworksMemberController@destroy']);
        /**End Member Cowork */



        /**Elernings */
        Route::get('admin/elernings/index', ['as' => 'admin.elernings.create.index', 'uses' => 'Admin\ElearningsController@create']);
        Route::get('admin/elernings/list', ['as' => 'admin.elernings.list.index', 'uses' => 'Admin\ElearningsController@index']);
        Route::post('admin/elernings/store', ['as' => 'admin.elernings.store', 'uses' => 'Admin\ElearningsController@store']);
        Route::get('admin/elernings/show/{id}', ['as' => 'admin.elernings.show', 'uses' => 'Admin\ElearningsController@show']);
        Route::get('admin/elernings/delete/{id}', ['as' => 'admin.elernings.delete', 'uses' => 'Admin\ElearningsController@destroy']);
        Route::put('admin/elernings/update/{id}', ['as' => 'admin.elernings.update', 'uses' => 'Admin\ElearningsController@update']);
        Route::get('admin/elernings/edit/{id}', ['as' => 'admin.elernings.edit.index', 'uses' => 'Admin\ElearningsController@edit']);
        /**End Elernings */

        /**Auditoriums */
        Route::get('admin/auditoriums/index', ['as' => 'admin.auditoriums.create.index', 'uses' => 'Admin\AuditoriumsController@create']);
        Route::get('admin/auditoriums/list', ['as' => 'admin.auditoriums.list.index', 'uses' => 'Admin\AuditoriumsController@index']);
        Route::post('admin/auditoriums/store', ['as' => 'admin.auditoriums.store', 'uses' => 'Admin\AuditoriumsController@store']);
        Route::get('admin/auditoriums/show/{id}', ['as' => 'admin.auditoriums.show', 'uses' => 'Admin\AuditoriumsController@show']);
        Route::get('admin/auditoriums/delete/{id}', ['as' => 'admin.auditoriums.delete', 'uses' => 'Admin\AuditoriumsController@destroy']);
        Route::put('admin/auditoriums/update/{id}', ['as' => 'admin.auditoriums.update', 'uses' => 'Admin\AuditoriumsController@update']);
        Route::get('admin/auditoriums/edit/{id}', ['as' => 'admin.auditoriums.edit.index', 'uses' => 'Admin\AuditoriumsController@edit']);
        /**End Auditoriums */

        /** Member */
        Route::get('admin/member/print/{id}', ['as' => 'admin.member.print', 'uses' => 'Admin\MembersController@print']);
        Route::get('admin/member/qrcode/{id}', ['as' => 'admin.member.qrcode', 'uses' => 'Admin\MembersController@qrcode']);
        Route::get('admin/member/create/{id}', ['as' => 'admin.member.create', 'uses' => 'Admin\MembersController@create']);
        Route::post('admin/member/store/{id}', ['as' => 'admin.member.store', 'uses' => 'Admin\MembersController@store']);
        Route::get('admin/member/delete/{id}', ['as' => 'admin.member.delete', 'uses' => 'Admin\MembersController@destroy']);
        /**End Member */



        /** Member */
        Route::get('admin/documentos/create/{id}', ['as' => 'admin.documentsStartup.create', 'uses' => 'Admin\DocumentsStartupController@create']);
        Route::post('admin/documentos/store/{id}', ['as' => 'admin.documentsStartup.store', 'uses' => 'Admin\DocumentsStartupController@store']);
        Route::get('admin/documentos/delete/{id}', ['as' => 'admin.documentsStartup.delete', 'uses' => 'Admin\DocumentsStartupController@destroy']);
        /**End Member */

        /**MeetingRoom Start */
        Route::get('admin/sala-de-reunião/list', ['as' => 'admin.meetingRoom.list.index', 'uses' => 'Admin\MeetingRoomsController@index']);
        Route::get('admin/sala-de-reunião/create', ['as' => 'admin.meetingRoom.create.index', 'uses' => 'Admin\MeetingRoomsController@create']);
        Route::post('admin/sala-de-reunião/store', ['as' => 'admin.meetingRoom.store', 'uses' => 'Admin\MeetingRoomsController@store']);
        Route::get('admin/sala-de-reunião/edit/{id}', ['as' => 'admin.meetingRoom.edit.index', 'uses' => 'Admin\MeetingRoomsController@edit']);
        Route::put('admin/sala-de-reunião/update/{id}', ['as' => 'admin.meetingRoom.update', 'uses' => 'Admin\MeetingRoomsController@update']);
        Route::get('admin/sala-de-reunião/delete/{id}', ['as' => 'admin.meetingRoom.delete', 'uses' => 'Admin\MeetingRoomsController@destroy']);
        Route::get('admin/sala-de-reunião/show/{id}', ['as' => 'admin.meetingRoom.show', 'uses' => 'Admin\MeetingRoomsController@show']);
        /**MeetingRoom End */
    });

    Route::middleware(['RepEqui'])->group(function () {
        /**equipmentRepair */
        Route::get('admin/reparação-equipamentos/create', ['as' => 'admin.equipmentRepair.create.index', 'uses' => 'Admin\EquipmentRepairsController@create']);
        Route::get('admin/reparação-equipamentos/list', ['as' => 'admin.equipmentRepair.list.index', 'uses' => 'Admin\EquipmentRepairsController@index']);
        Route::post('admin/reparação-equipamentos/store', ['as' => 'admin.equipmentRepair.store', 'uses' => 'Admin\EquipmentRepairsController@store']);
        Route::get('admin/reparação-equipamentos/show/{id}', ['as' => 'admin.equipmentRepair.show', 'uses' => 'Admin\EquipmentRepairsController@show']);
        Route::get('admin/reparação-equipamentos/delete/{id}', ['as' => 'admin.equipmentRepair.delete', 'uses' => 'Admin\EquipmentRepairsController@destroy']);
        Route::put('admin/reparação-equipamentos/update/{id}', ['as' => 'admin.equipmentRepair.update', 'uses' => 'Admin\EquipmentRepairsController@update']);
        Route::get('admin/reparação-equipamentos/edit/{id}', ['as' => 'admin.equipmentRepair.edit.index', 'uses' => 'Admin\EquipmentRepairsController@edit']);
        /**End equipmentRepair */
    });


  Route::middleware(['RepEqui'])->group(function () {
        /**equipmentRepair */
        Route::get('admin/autoInspection/create', ['as' => 'admin.autoInspection.create.index', 'uses' => 'Admin\AutoinspectionController@create']);
        Route::get('admin/autoInspection/list', ['as' => 'admin.autoInspection.list.index', 'uses' => 'Admin\AutoinspectionController@index']);
        Route::post('admin/autoInspection/store', ['as' => 'admin.autoInspection.store', 'uses' => 'Admin\AutoinspectionController@store']);
        Route::get('admin/autoInspection/show/{id}', ['as' => 'admin.autoInspection.show', 'uses' => 'Admin\AutoinspectionController@show']);
        Route::get('admin/autoInspection/delete/{id}', ['as' => 'admin.autoInspection.delete', 'uses' => 'Admin\AutoinspectionController@destroy']);
        Route::put('admin/autoInspection/update/{id}', ['as' => 'admin.autoInspection.update', 'uses' => 'Admin\AutoinspectionController@update']);
        Route::get('admin/autoInspection/edit/{id}', ['as' => 'admin.autoInspection.edit.index', 'uses' => 'Admin\AutoinspectionController@edit']);
        /**End equipmentRepair */
    });

    Route::middleware(['FabSoft'])->group(function () {
        /**
         *  ManufacturesSoftwares
         */
        Route::get('admin/manufactures/create', ['as' => 'admin.manufactures.create', 'uses' => 'Admin\ManufacturesSoftwaresController@create']);
        Route::post('admin/manufactures/store', ['as' => 'admin.manufactures.store', 'uses' => 'Admin\ManufacturesSoftwaresController@store']);
        Route::get('admin/manufactures/delete/{id}', ['as' => 'admin.manufactures.delete', 'uses' => 'Admin\ManufacturesSoftwaresController@destroy']);
        Route::put('admin/manufactures/update/{id}', ['as' => 'admin.manufactures.update', 'uses' => 'Admin\ManufacturesSoftwaresController@update']);
        Route::get('admin/manufactures/edit/{id}', ['as' => 'admin.manufactures.edit', 'uses' => 'Admin\ManufacturesSoftwaresController@edit']);
        Route::get('admin/manufactures/show/{id}', ['as' => 'admin.manufactures.show', 'uses' => 'Admin\ManufacturesSoftwaresController@show']);
        Route::get('admin/manufactures/list', ['as' => 'admin.manufactures.list', 'uses' => 'Admin\ManufacturesSoftwaresController@index']);
        /**End ManufacturesSoftware */
    });
});


/* QRCODE find, startup & cowork */
Route::get('membro/startup/{id}', ['as' => 'admin.member.qrfind', 'uses' => 'Admin\MembersController@qrfind']);
Route::get('membro/cowork/{id}', ['as' => 'admin.member.cowork', 'uses' => 'Admin\CoworksMemberController@qrfind']);

/* Invoice Payment */
Route::get('fatura/{code}/{service}/{value}/{client}/{status}/{nif}', ['as' => 'admin.payments.validate', 'uses' => 'Admin\InvoiceController@qrscan']);
/**End  */


/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';
