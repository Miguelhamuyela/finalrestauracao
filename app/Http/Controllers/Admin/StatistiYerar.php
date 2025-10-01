<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class StatistiYerar extends Controller
{

    public function store(Request $request)
    {

        return redirect()->route('admin.StatistiYerar.show', $request->year);
    }

    public function show($id)
    {

        $response['year']=$id;
        $response['totalPayments'] = Payment::whereYear('created_at', '=', $id)->where('status', '=', 'Pago')->where('currency', '=', 'Kwanza')->sum('value');


     /**monthly payments */
     $janTotal = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->sum('value');
     $response['janTotal'] = json_encode($janTotal);
     $fevTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->sum('value');
     $response['fevTotal'] = json_encode($fevTotal);
     $marTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->sum('value');
     $response['marTotal'] = json_encode($marTotal);
     $abrTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->sum('value');
     $response['abrTotal'] = json_encode($abrTotal);
     $maioTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->sum('value');
     $response['maioTotal'] = json_encode($maioTotal);
     $junTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->sum('value');
     $response['junTotal'] = json_encode($junTotal);
     $julTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->sum('value');
     $response['julTotal'] = json_encode($julTotal);
     $agoTotal   = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->sum('value');
     $response['agoTotal'] = json_encode($agoTotal);
     $setTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->sum('value');
     $response['setTotal'] = json_encode($setTotal);
     $outTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->sum('value');
     $response['outTotal'] = json_encode($outTotal);
     $novTotal  = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->sum('value');
     $response['novTotal'] = json_encode($novTotal);
     $dezTotal = Payment::whereYear('created_at', '=', $id)->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->sum('value');
     $response['dezTotal'] = json_encode($dezTotal);

     /**end  monthly payments  */



        /**Manufacture  */
        $janManufacture = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['janManufacture'] = json_encode($janManufacture);
        $fevManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['feManufacture'] = json_encode($fevManufacture);
        $marManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['marManufacture'] = json_encode($marManufacture);
        $abrManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['abrManufacture'] = json_encode($abrManufacture);
        $maioManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['maioManufacture'] = json_encode($maioManufacture);
        $junManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['junManufacture'] = json_encode($junManufacture);
        $julManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['julManufacture'] = json_encode($julManufacture);
        $agoManufacture   = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['agoManufacture'] = json_encode($agoManufacture);
        $setManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['setManufacture'] = json_encode($setManufacture);
        $outManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['outManufacture'] = json_encode($outManufacture);
        $novManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['novManufacture'] = json_encode($novManufacture);
        $dezManufacture  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        $response['dezManufacture'] = json_encode($dezManufacture);
        $response['totalManufacture']  = Payment::whereYear('created_at', '=', $id)->with('manufacturesSoftware')->where('status', '=', 'Pago')->where('origin', '=', 'Fábrica de Software')->sum('value');
        /**end  Manufacture  */


        /* equipaments/*/
        $response['totalEquipament'] = Payment::whereYear('created_at', '=', $id)->with('equipaments')->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $janEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['janEquipament'] = json_encode($janEquipament);
        $fevEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['fevEquipament'] = json_encode($fevEquipament);
        $response['fevEquipament'];
        $marEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['marEquipament'] = json_encode($marEquipament);
        $abrEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['abrEquipament'] = json_encode($abrEquipament);
        $maioEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['maioEquipament'] = json_encode($maioEquipament);
        $junEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->count();
        $response['junEquipament'] = json_encode($junEquipament);
        $julEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['julEquipament'] = json_encode($julEquipament);
        $agoEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['agoEquipament'] = json_encode($agoEquipament);
        $setEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['setEquipament'] = json_encode($setEquipament);
        $outEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['outEquipament'] = json_encode($outEquipament);
        $novEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['novEquipament'] = json_encode($novEquipament);
        $dezEquipament = Payment::whereYear('created_at', '=', $id)->with('equipaments')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Reparação de Equipamentos')->sum('value');
        $response['dezEquipament'] = json_encode($dezEquipament);
        /* end equipaments/*/


        /** Meeting Room */
        $janMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['janMeeting'] = json_encode($janMeeting);
        $fevMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['fevMeeting'] = json_encode($fevMeeting);
        $marMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['marMeeting'] = json_encode($marMeeting);
        $abrMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['abrMeeting'] = json_encode($abrMeeting);
        $maioMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['maioMeeting'] = json_encode($maioMeeting);
        $junMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['junMeeting'] = json_encode($junMeeting);
        $julMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['julMeeting'] = json_encode($julMeeting);
        $agoMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['agoMeeting'] = json_encode($agoMeeting);
        $setMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['setMeeting'] = json_encode($setMeeting);
        $outMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['outMeeting'] = json_encode($outMeeting);
        $novMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['novMeeting'] = json_encode($novMeeting);
        $dezMeeting = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        $response['dezMeeting'] = json_encode($dezMeeting);
        $response['totalMeeting']  = Payment::whereYear('created_at', '=', $id)->with('MeetingRooms')->where('status', '=', 'Pago')->where('origin', '=', 'Sala de Reunioes')->sum('value');
        /**end  Meeting */

    


        /**startups */
        $janStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['janStartups'] = json_encode($janStartups);
        $fevStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['fevStartups'] = json_encode($fevStartups);
        $marStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['marStartups'] = json_encode($marStartups);
        $abrStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['abrStartups'] = json_encode($abrStartups);
        $maioStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['maioStartups'] = json_encode($maioStartups);
        $junStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['junStartups'] = json_encode($junStartups);
        $julStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['julStartups'] = json_encode($julStartups);
        $agoStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['agoStartups'] = json_encode($agoStartups);
        $setStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['setStartups'] = json_encode($setStartups);
        $outStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['outStartups'] = json_encode($outStartups);
        $novStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['novStartups'] = json_encode($novStartups);
        $dezStartups = Payment::whereYear('created_at', '=', $id)->with('startups')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        $response['dezStartups'] = json_encode($dezStartups);
        $response['totalStartups']  = Payment::whereYear('created_at', '=', $id)->with('startups')->where('status', '=', 'Pago')->where('origin', '=', 'Startup')->sum('value');
        /**end  startup */


        /**cowork  */
        $jancowork = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['jancowork'] = json_encode($jancowork);
        $fevcowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['fecowork'] = json_encode($fevcowork);
        $marcowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['marcowork'] = json_encode($marcowork);
        $abrcowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['abrcowork'] = json_encode($abrcowork);
        $maiocowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['maiocowork'] = json_encode($maiocowork);
        $juncowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['juncowork'] = json_encode($juncowork);
        $julcowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 07)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['julcowork'] = json_encode($julcowork);
        $agocowork   = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['agocowork'] = json_encode($agocowork);
        $setcowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['setcowork'] = json_encode($setcowork);
        $outcowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['outcowork'] = json_encode($outcowork);
        $novcowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['novcowork'] = json_encode($novcowork);
        $dezcowork  = Payment::whereYear('created_at', '=', $id)->with('Cowork')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Cowork')->sum('value');
        $response['dezcowork'] = json_encode($dezcowork);

        /**end  cowork  */

        /**Auditoriums  */
        $janAuditoriums = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', 01)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['janAuditoriums'] = json_encode($janAuditoriums);
        $fevAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', 02)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['feAuditoriums'] = json_encode($fevAuditoriums);
        $marAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', 03)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['marAuditoriums'] = json_encode($marAuditoriums);
        $abrAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', 04)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['abrAuditoriums'] = json_encode($abrAuditoriums);
        $maioAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', 05)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['maioAuditoriums'] = json_encode($maioAuditoriums);
        $junAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', 06)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['junAuditoriums'] = json_encode($junAuditoriums);
        $julAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->where('status', '=', 'Pago')->whereMonth('created_at', '=', 07)->where('origin', '=', 'Auditoriums')->sum('value');
        $response['julAuditoriums'] = json_encode($julAuditoriums);
        $agoAuditoriums   = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', '08')->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['agoAuditoriums'] = json_encode($agoAuditoriums);
        $setAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', '09')->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['setAuditoriums'] = json_encode($setAuditoriums);
        $outAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', '10')->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['outAuditoriums'] = json_encode($outAuditoriums);
        $novAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', 11)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['novAuditoriums'] = json_encode($novAuditoriums);
        $dezAuditoriums  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->whereMonth('created_at', '=', 12)->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        $response['dezAuditoriums'] = json_encode($dezAuditoriums);
        $response['totalAuditoriums']  = Payment::whereYear('created_at', '=', $id)->with('Auditoriums')->where('status', '=', 'Pago')->where('origin', '=', 'Auditório')->sum('value');
        /**end  Auditoriums  */

        return view('admin.Statistics.StatisticsYear.index',$response);
    }
}
