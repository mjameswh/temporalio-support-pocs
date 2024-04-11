<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ScheduleSpec is a complete description of a set of absolute timestamps
 * (possibly infinite) that an action should occur at. The meaning of a
 * ScheduleSpec depends only on its contents and never changes, except that the
 * definition of a time zone can change over time (most commonly, when daylight
 * saving time policy changes for an area). To create a totally self-contained
 * ScheduleSpec, use UTC or include timezone_data.
 * For input, you can provide zero or more of: structured_calendar, calendar,
 * cron_string, interval, and exclude_structured_calendar, and all of them will
 * be used (the schedule will take action at the union of all of their times,
 * minus the ones that match exclude_structured_calendar).
 * On input, calendar and cron_string fields will be compiled into
 * structured_calendar (and maybe interval and timezone_name), so if you
 * Describe a schedule, you'll see only structured_calendar, interval, etc.
 * If a spec has no matching times after the current time, then the schedule
 * will be subject to automatic deletion (after several days).
 *
 * Generated from protobuf message <code>temporal.api.schedule.v1.ScheduleSpec</code>
 */
class ScheduleSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Calendar-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.StructuredCalendarSpec structured_calendar = 7;</code>
     */
    private $structured_calendar;
    /**
     * cron_string holds a traditional cron specification as a string. It
     * accepts 5, 6, or 7 fields, separated by spaces, and interprets them the
     * same way as CalendarSpec.
     * 5 fields:         minute, hour, day_of_month, month, day_of_week
     * 6 fields:         minute, hour, day_of_month, month, day_of_week, year
     * 7 fields: second, minute, hour, day_of_month, month, day_of_week, year
     * If year is not given, it defaults to *. If second is not given, it
     * defaults to 0.
     * Shorthands &#64;yearly, &#64;monthly, &#64;weekly, &#64;daily, and &#64;hourly are also
     * accepted instead of the 5-7 time fields.
     * Optionally, the string can be preceded by CRON_TZ=<timezone name> or
     * TZ=<timezone name>, which will get copied to timezone_name. (There must
     * not also be a timezone_name present.)
     * Optionally "#" followed by a comment can appear at the end of the string.
     * Note that the special case that some cron implementations have for
     * treating day_of_month and day_of_week as "or" instead of "and" when both
     * are set is not implemented.
     * &#64;every <interval>[/<phase>] is accepted and gets compiled into an
     * IntervalSpec instead. <interval> and <phase> should be a decimal integer
     * with a unit suffix s, m, h, or d.
     *
     * Generated from protobuf field <code>repeated string cron_string = 8;</code>
     */
    private $cron_string;
    /**
     * Calendar-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.CalendarSpec calendar = 1;</code>
     */
    private $calendar;
    /**
     * Interval-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.IntervalSpec interval = 2;</code>
     */
    private $interval;
    /**
     * Any timestamps matching any of exclude_* will be skipped.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.CalendarSpec exclude_calendar = 3 [deprecated = true];</code>
     * @deprecated
     */
    private $exclude_calendar;
    /**
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.StructuredCalendarSpec exclude_structured_calendar = 9;</code>
     */
    private $exclude_structured_calendar;
    /**
     * If start_time is set, any timestamps before start_time will be skipped.
     * (Together, start_time and end_time make an inclusive interval.)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    protected $start_time = null;
    /**
     * If end_time is set, any timestamps after end_time will be skipped.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     */
    protected $end_time = null;
    /**
     * All timestamps will be incremented by a random value from 0 to this
     * amount of jitter. Default: 0
     *
     * Generated from protobuf field <code>.google.protobuf.Duration jitter = 6;</code>
     */
    protected $jitter = null;
    /**
     * Time zone to interpret all calendar-based specs in.
     * If unset, defaults to UTC. We recommend using UTC for your application if
     * at all possible, to avoid various surprising properties of time zones.
     * Time zones may be provided by name, corresponding to names in the IANA
     * time zone database (see https://www.iana.org/time-zones). The definition
     * will be loaded by the Temporal server from the environment it runs in.
     * If your application requires more control over the time zone definition
     * used, it may pass in a complete definition in the form of a TZif file
     * from the time zone database. If present, this will be used instead of
     * loading anything from the environment. You are then responsible for
     * updating timezone_data when the definition changes.
     * Calendar spec matching is based on literal matching of the clock time
     * with no special handling of DST: if you write a calendar spec that fires
     * at 2:30am and specify a time zone that follows DST, that action will not
     * be triggered on the day that has no 2:30am. Similarly, an action that
     * fires at 1:30am will be triggered twice on the day that has two 1:30s.
     * Also note that no actions are taken on leap-seconds (e.g. 23:59:60 UTC).
     *
     * Generated from protobuf field <code>string timezone_name = 10;</code>
     */
    protected $timezone_name = '';
    /**
     * Generated from protobuf field <code>bytes timezone_data = 11;</code>
     */
    protected $timezone_data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Temporal\Api\Schedule\V1\StructuredCalendarSpec>|\Google\Protobuf\Internal\RepeatedField $structured_calendar
     *           Calendar-based specifications of times.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $cron_string
     *           cron_string holds a traditional cron specification as a string. It
     *           accepts 5, 6, or 7 fields, separated by spaces, and interprets them the
     *           same way as CalendarSpec.
     *           5 fields:         minute, hour, day_of_month, month, day_of_week
     *           6 fields:         minute, hour, day_of_month, month, day_of_week, year
     *           7 fields: second, minute, hour, day_of_month, month, day_of_week, year
     *           If year is not given, it defaults to *. If second is not given, it
     *           defaults to 0.
     *           Shorthands &#64;yearly, &#64;monthly, &#64;weekly, &#64;daily, and &#64;hourly are also
     *           accepted instead of the 5-7 time fields.
     *           Optionally, the string can be preceded by CRON_TZ=<timezone name> or
     *           TZ=<timezone name>, which will get copied to timezone_name. (There must
     *           not also be a timezone_name present.)
     *           Optionally "#" followed by a comment can appear at the end of the string.
     *           Note that the special case that some cron implementations have for
     *           treating day_of_month and day_of_week as "or" instead of "and" when both
     *           are set is not implemented.
     *           &#64;every <interval>[/<phase>] is accepted and gets compiled into an
     *           IntervalSpec instead. <interval> and <phase> should be a decimal integer
     *           with a unit suffix s, m, h, or d.
     *     @type array<\Temporal\Api\Schedule\V1\CalendarSpec>|\Google\Protobuf\Internal\RepeatedField $calendar
     *           Calendar-based specifications of times.
     *     @type array<\Temporal\Api\Schedule\V1\IntervalSpec>|\Google\Protobuf\Internal\RepeatedField $interval
     *           Interval-based specifications of times.
     *     @type array<\Temporal\Api\Schedule\V1\CalendarSpec>|\Google\Protobuf\Internal\RepeatedField $exclude_calendar
     *           Any timestamps matching any of exclude_* will be skipped.
     *     @type array<\Temporal\Api\Schedule\V1\StructuredCalendarSpec>|\Google\Protobuf\Internal\RepeatedField $exclude_structured_calendar
     *     @type \Google\Protobuf\Timestamp $start_time
     *           If start_time is set, any timestamps before start_time will be skipped.
     *           (Together, start_time and end_time make an inclusive interval.)
     *     @type \Google\Protobuf\Timestamp $end_time
     *           If end_time is set, any timestamps after end_time will be skipped.
     *     @type \Google\Protobuf\Duration $jitter
     *           All timestamps will be incremented by a random value from 0 to this
     *           amount of jitter. Default: 0
     *     @type string $timezone_name
     *           Time zone to interpret all calendar-based specs in.
     *           If unset, defaults to UTC. We recommend using UTC for your application if
     *           at all possible, to avoid various surprising properties of time zones.
     *           Time zones may be provided by name, corresponding to names in the IANA
     *           time zone database (see https://www.iana.org/time-zones). The definition
     *           will be loaded by the Temporal server from the environment it runs in.
     *           If your application requires more control over the time zone definition
     *           used, it may pass in a complete definition in the form of a TZif file
     *           from the time zone database. If present, this will be used instead of
     *           loading anything from the environment. You are then responsible for
     *           updating timezone_data when the definition changes.
     *           Calendar spec matching is based on literal matching of the clock time
     *           with no special handling of DST: if you write a calendar spec that fires
     *           at 2:30am and specify a time zone that follows DST, that action will not
     *           be triggered on the day that has no 2:30am. Similarly, an action that
     *           fires at 1:30am will be triggered twice on the day that has two 1:30s.
     *           Also note that no actions are taken on leap-seconds (e.g. 23:59:60 UTC).
     *     @type string $timezone_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Calendar-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.StructuredCalendarSpec structured_calendar = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStructuredCalendar()
    {
        return $this->structured_calendar;
    }

    /**
     * Calendar-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.StructuredCalendarSpec structured_calendar = 7;</code>
     * @param array<\Temporal\Api\Schedule\V1\StructuredCalendarSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStructuredCalendar($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\StructuredCalendarSpec::class);
        $this->structured_calendar = $arr;

        return $this;
    }

    /**
     * cron_string holds a traditional cron specification as a string. It
     * accepts 5, 6, or 7 fields, separated by spaces, and interprets them the
     * same way as CalendarSpec.
     * 5 fields:         minute, hour, day_of_month, month, day_of_week
     * 6 fields:         minute, hour, day_of_month, month, day_of_week, year
     * 7 fields: second, minute, hour, day_of_month, month, day_of_week, year
     * If year is not given, it defaults to *. If second is not given, it
     * defaults to 0.
     * Shorthands &#64;yearly, &#64;monthly, &#64;weekly, &#64;daily, and &#64;hourly are also
     * accepted instead of the 5-7 time fields.
     * Optionally, the string can be preceded by CRON_TZ=<timezone name> or
     * TZ=<timezone name>, which will get copied to timezone_name. (There must
     * not also be a timezone_name present.)
     * Optionally "#" followed by a comment can appear at the end of the string.
     * Note that the special case that some cron implementations have for
     * treating day_of_month and day_of_week as "or" instead of "and" when both
     * are set is not implemented.
     * &#64;every <interval>[/<phase>] is accepted and gets compiled into an
     * IntervalSpec instead. <interval> and <phase> should be a decimal integer
     * with a unit suffix s, m, h, or d.
     *
     * Generated from protobuf field <code>repeated string cron_string = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCronString()
    {
        return $this->cron_string;
    }

    /**
     * cron_string holds a traditional cron specification as a string. It
     * accepts 5, 6, or 7 fields, separated by spaces, and interprets them the
     * same way as CalendarSpec.
     * 5 fields:         minute, hour, day_of_month, month, day_of_week
     * 6 fields:         minute, hour, day_of_month, month, day_of_week, year
     * 7 fields: second, minute, hour, day_of_month, month, day_of_week, year
     * If year is not given, it defaults to *. If second is not given, it
     * defaults to 0.
     * Shorthands &#64;yearly, &#64;monthly, &#64;weekly, &#64;daily, and &#64;hourly are also
     * accepted instead of the 5-7 time fields.
     * Optionally, the string can be preceded by CRON_TZ=<timezone name> or
     * TZ=<timezone name>, which will get copied to timezone_name. (There must
     * not also be a timezone_name present.)
     * Optionally "#" followed by a comment can appear at the end of the string.
     * Note that the special case that some cron implementations have for
     * treating day_of_month and day_of_week as "or" instead of "and" when both
     * are set is not implemented.
     * &#64;every <interval>[/<phase>] is accepted and gets compiled into an
     * IntervalSpec instead. <interval> and <phase> should be a decimal integer
     * with a unit suffix s, m, h, or d.
     *
     * Generated from protobuf field <code>repeated string cron_string = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCronString($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cron_string = $arr;

        return $this;
    }

    /**
     * Calendar-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.CalendarSpec calendar = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * Calendar-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.CalendarSpec calendar = 1;</code>
     * @param array<\Temporal\Api\Schedule\V1\CalendarSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCalendar($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\CalendarSpec::class);
        $this->calendar = $arr;

        return $this;
    }

    /**
     * Interval-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.IntervalSpec interval = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Interval-based specifications of times.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.IntervalSpec interval = 2;</code>
     * @param array<\Temporal\Api\Schedule\V1\IntervalSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInterval($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\IntervalSpec::class);
        $this->interval = $arr;

        return $this;
    }

    /**
     * Any timestamps matching any of exclude_* will be skipped.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.CalendarSpec exclude_calendar = 3 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getExcludeCalendar()
    {
        @trigger_error('exclude_calendar is deprecated.', E_USER_DEPRECATED);
        return $this->exclude_calendar;
    }

    /**
     * Any timestamps matching any of exclude_* will be skipped.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.CalendarSpec exclude_calendar = 3 [deprecated = true];</code>
     * @param array<\Temporal\Api\Schedule\V1\CalendarSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setExcludeCalendar($var)
    {
        @trigger_error('exclude_calendar is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\CalendarSpec::class);
        $this->exclude_calendar = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.StructuredCalendarSpec exclude_structured_calendar = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludeStructuredCalendar()
    {
        return $this->exclude_structured_calendar;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.StructuredCalendarSpec exclude_structured_calendar = 9;</code>
     * @param array<\Temporal\Api\Schedule\V1\StructuredCalendarSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludeStructuredCalendar($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\StructuredCalendarSpec::class);
        $this->exclude_structured_calendar = $arr;

        return $this;
    }

    /**
     * If start_time is set, any timestamps before start_time will be skipped.
     * (Together, start_time and end_time make an inclusive interval.)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * If start_time is set, any timestamps before start_time will be skipped.
     * (Together, start_time and end_time make an inclusive interval.)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * If end_time is set, any timestamps after end_time will be skipped.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * If end_time is set, any timestamps after end_time will be skipped.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * All timestamps will be incremented by a random value from 0 to this
     * amount of jitter. Default: 0
     *
     * Generated from protobuf field <code>.google.protobuf.Duration jitter = 6;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getJitter()
    {
        return $this->jitter;
    }

    public function hasJitter()
    {
        return isset($this->jitter);
    }

    public function clearJitter()
    {
        unset($this->jitter);
    }

    /**
     * All timestamps will be incremented by a random value from 0 to this
     * amount of jitter. Default: 0
     *
     * Generated from protobuf field <code>.google.protobuf.Duration jitter = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setJitter($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->jitter = $var;

        return $this;
    }

    /**
     * Time zone to interpret all calendar-based specs in.
     * If unset, defaults to UTC. We recommend using UTC for your application if
     * at all possible, to avoid various surprising properties of time zones.
     * Time zones may be provided by name, corresponding to names in the IANA
     * time zone database (see https://www.iana.org/time-zones). The definition
     * will be loaded by the Temporal server from the environment it runs in.
     * If your application requires more control over the time zone definition
     * used, it may pass in a complete definition in the form of a TZif file
     * from the time zone database. If present, this will be used instead of
     * loading anything from the environment. You are then responsible for
     * updating timezone_data when the definition changes.
     * Calendar spec matching is based on literal matching of the clock time
     * with no special handling of DST: if you write a calendar spec that fires
     * at 2:30am and specify a time zone that follows DST, that action will not
     * be triggered on the day that has no 2:30am. Similarly, an action that
     * fires at 1:30am will be triggered twice on the day that has two 1:30s.
     * Also note that no actions are taken on leap-seconds (e.g. 23:59:60 UTC).
     *
     * Generated from protobuf field <code>string timezone_name = 10;</code>
     * @return string
     */
    public function getTimezoneName()
    {
        return $this->timezone_name;
    }

    /**
     * Time zone to interpret all calendar-based specs in.
     * If unset, defaults to UTC. We recommend using UTC for your application if
     * at all possible, to avoid various surprising properties of time zones.
     * Time zones may be provided by name, corresponding to names in the IANA
     * time zone database (see https://www.iana.org/time-zones). The definition
     * will be loaded by the Temporal server from the environment it runs in.
     * If your application requires more control over the time zone definition
     * used, it may pass in a complete definition in the form of a TZif file
     * from the time zone database. If present, this will be used instead of
     * loading anything from the environment. You are then responsible for
     * updating timezone_data when the definition changes.
     * Calendar spec matching is based on literal matching of the clock time
     * with no special handling of DST: if you write a calendar spec that fires
     * at 2:30am and specify a time zone that follows DST, that action will not
     * be triggered on the day that has no 2:30am. Similarly, an action that
     * fires at 1:30am will be triggered twice on the day that has two 1:30s.
     * Also note that no actions are taken on leap-seconds (e.g. 23:59:60 UTC).
     *
     * Generated from protobuf field <code>string timezone_name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTimezoneName($var)
    {
        GPBUtil::checkString($var, True);
        $this->timezone_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes timezone_data = 11;</code>
     * @return string
     */
    public function getTimezoneData()
    {
        return $this->timezone_data;
    }

    /**
     * Generated from protobuf field <code>bytes timezone_data = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setTimezoneData($var)
    {
        GPBUtil::checkString($var, False);
        $this->timezone_data = $var;

        return $this;
    }

}

