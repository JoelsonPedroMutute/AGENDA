<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     schema="Appointment",
 *     type="object",
 *     title="Appointment",
 *     description="Agendamento do usuário",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="title", type="string", example="Consulta médica"),
 *     @OA\Property(property="datetime", type="string", format="date-time", example="2025-08-20T14:30:00Z"),
 *     @OA\Property(property="status", type="string", example="pendente"),
 *     @OA\Property(property="user_id", type="integer", example=5),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-08-01T10:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-08-05T15:00:00Z")
 * )
 *
 * @OA\Schema(
 *     schema="AppointmentWithRelations",
 *     title="AppointmentWithRelations",
 *     description="Agendamento do usuário com dados relacionados",
 *     allOf={
 *         @OA\Schema(ref="#/components/schemas/Appointment"),
 *         @OA\Schema(
 *             type="object",
 *             @OA\Property(
 *                 property="user",
 *                 ref="#/components/schemas/User",
 *                 nullable=true
 *             ),
 *             @OA\Property(
 *                 property="reminders",
 *                 type="array",
 *                 @OA\Items(ref="#/components/schemas/Reminder"),
 *                 nullable=true
 *             )
 *         )
 *     }
 * )
 */
class AppointmentSchema {}
