<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>social-research-form-child-sws</title>
</head>
<style>
    @media print {
        body {
            -webkit-print-color-adjust: exact;
        }
    }
</style>
<body>

<div>
    <div style="clear:both">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal">
            &#xa0;
        </p>
    </div>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Avenir LT Std 35 Light'">&#xa0;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Avenir LT Std 35 Light'">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td style="width:100%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:15pt" calss="print">
                    <a name="OLE_LINK12"></a><a name="OLE_LINK13"><strong><span
                                style="font-family:'Arial Narrow'; color:#17365d">Child Identification</span></strong></a>
                </p>
            </td>
        </tr>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td colspan="15"
                style="border-right:1.5pt solid #ffffff; border-left-style:solid; border-left-width:3pt; padding-right:4.65pt; padding-left:3.9pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#17365d">Child Basic Information</span></strong>
                </p>
            </td>
            <td style="vertical-align:top">
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td rowspan="4"
                style="width:12.88%; border-right:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Child Name</span></strong>
                </p>
            </td>
            <td style="width:9.22%; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Name</span></strong>
                </p>
            </td>
            <td style="width:9.16%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{ $child_fullName_en[0]}}
                </p>
            </td>
            <td style="width:9.14%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{ $child_fullName_ar[0]}}
                </p>
            </td>
            <td style="width:9.22%; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الاسم الأول</span>
                </p>
            </td>
            <td style="width:14.7%; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">CODE</span></strong>
                </p>
            </td>
            <td colspan="9"
                style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$child->child_code}}
                </p>
            </td>
            <td style="border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top">
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Father</span></strong>
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{ $child_fullName_en[1]}}
                </p>
            </td>
            <td style="width:9.14%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{ $child_fullName_ar[1]}}
                </p>
            </td>
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الأب</span>
                </p>
            </td>
            <td style="width:14.7%; border-top:1.5pt solid #ffffff; border-right-style:solid; border-right-width:0.75pt; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.03pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">ID No.</span></strong>
                </p>
            </td>
            <td colspan="9"
                style="border-right:1.5pt solid #ffffff; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$child->child_id_no}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Grandfather</span></strong>
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{ $child_fullName_en[2]}}
                </p>
            </td>
            <td style="width:9.14%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{ $child_fullName_ar[2]}}
                </p>
            </td>
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الجد</span>
                </p>
            </td>
            <td style="width:14.7%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Gender</span></strong>
                </p>
            </td>
            <td colspan="9"
                style="border-top-style:solid; border-top-width:0.75pt; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <input type="checkbox" {{ old('gender', $child->gender) === 'Male' ? 'checked' : '' }} name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Male</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('gender', $child->gender) === 'Female' ? 'checked' : '' }} name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Female</span>
                </p>
            </td>
            <td style="border-top-style:solid; border-top-width:0.75pt; vertical-align:top">
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Family</span></strong>
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{ $child_fullName_en[3]}}
                </p>
            </td>
            <td style="width:9.14%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{ $child_fullName_ar[3]}}
                </p>
            </td>
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">العائلة</span>
                </p>
            </td>
            <td style="width:14.7%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Birth Date</span></strong>
                </p>
            </td>
            <td colspan="9"
                style="border-top:0.75pt solid #f2f2f2; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$child->birth_date}}
                </p>
            </td>
            <td style="vertical-align:top">
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:12.88%; border-right:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Category</span></strong>
                </p>
            </td>
            <td colspan="14"
                style="border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <input type="checkbox"
                           {{ old('category', $child->category) === 'Orphan' ? 'checked' : '' }} name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Orphan</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span>
                    <input
                        type="checkbox"
                        {{ old('category', $child->category) === 'Needy' ? 'checked' : '' }} name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Needy</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span>
                    <input
                        type="checkbox"
                        {{ old('category', $child->category) === 'Special Needs' ? 'checked' : '' }} name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Special Needs </span>
                </p>
            </td>
            <td style="vertical-align:top">
            </td>
        </tr>
        <tr style="height:0pt">
            <td style="width:69.25pt">
            </td>
            <td style="width:49.6pt">
            </td>
            <td style="width:49.2pt">
            </td>
            <td style="width:49.1pt">
            </td>
            <td style="width:49.55pt">
            </td>
            <td style="width:78.95pt">
            </td>
            <td style="width:21.25pt">
            </td>
            <td style="width:21.25pt">
            </td>
            <td style="width:21.25pt">
            </td>
            <td style="width:21.25pt">
            </td>
            <td style="width:21.25pt">
            </td>
            <td style="width:21.25pt">
            </td>
            <td style="width:21.25pt">
            </td>
            <td style="width:21.25pt">
            </td>
            <td style="width:20.75pt">
            </td>
            <td style="width:0.75pt">
            </td>
        </tr>
    </table>

    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; border-bottom:1.5pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td colspan="15"
                style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#17365d">Mother Basic Information</span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td rowspan="4"
                style="width:13.14%; border-right:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Mother Name</span></strong>
                </p>
            </td>
            <td style="width:9.2%; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Name</span></strong>
                </p>
            </td>
            <td style="width:8.82%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$mother_fullName_en[0]}}
                </p>
            </td>
            <td style="width:9.74%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:9pt">
                    {{$mother_fullName_ar[0]}}
                </p>
            </td>
            <td style="width:9.16%; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الاسم الأول</span>
                </p>
            </td>
            <td style="width:14.36%; border-right-style:solid; border-right-width:0.75pt; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.03pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">ID No.</span></strong>
                </p>
            </td>
            <td style="border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:115%; font-size:9pt">
                    {{$child->mother_id_no}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.2%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Father</span></strong>
                </p>
            </td>
            <td style="width:8.82%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$mother_fullName_en[1]}}
                </p>
            </td>
            <td style="width:9.74%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt">
                    {{$mother_fullName_ar[1]}}
                </p>
            </td>
            <td style=" border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الأب</span>
                </p>
            </td>
            <td rowspan="3"
                style="width:14.36%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Marital Status</span></strong>
                </p>
            </td>
            <td colspan="9" rowspan="3"
                style="border-top-style:solid; border-top-width:0.75pt; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                    <input type="checkbox"
                           {{ old('mother_martial_status', $child->mother_martial_status) === 'Divorced' ? 'checked' : '' }} name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Divorced</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('mother_martial_status', $child->mother_martial_status) === 'Married' ? 'checked' : '' }}                                                      name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Married</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('mother_martial_status', $child->mother_martial_status) === 'Widow' ? 'checked' : '' }}                                               name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Widow</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('mother_martial_status', $child->mother_martial_status) === 'Abandon' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Abandon</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.2%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Grandfather</span></strong>
                </p>
            </td>
            <td style="width:8.82%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$mother_fullName_en[2]}}
                </p>
            </td>
            <td style="width:9.74%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:9pt">
                    {{$mother_fullName_ar[2]}}
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الجد</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.2%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Family</span></strong>
                </p>
            </td>
            <td style="width:8.82%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$mother_fullName_en[3]}}
                </p>
            </td>
            <td style="width:9.74%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt">
                    {{$mother_fullName_en[3]}}
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">العائلة</span>
                </p>
            </td>
        </tr>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; border-bottom:1.5pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td colspan="15"
                style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#17365d">Father Basic Information</span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td rowspan="4"
                style="width:13.14%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Father Name</span></strong>
                </p>
            </td>
            <td style="width:9.2%; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Name</span></strong>
                </p>
            </td>
            <td style="width:8.84%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$father_fullName_en[0]}}
                </p>
            </td>
            <td style="width:9.72%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:9pt">
                    {{$father_fullName_ar[0]}}
                </p>
            </td>
            <td style="width:9.18%; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الاسم الأول</span>
                </p>
            </td>
            <td style="width:14.34%; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">ID No.</span></strong>
                </p>
            </td>
            <td style="border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:115%; font-size:9pt">
                    {{$child->father_id_no}}
                </p>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.2%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Father</span></strong>
                </p>
            </td>
            <td style="width:8.84%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$father_fullName_en[1]}}
                </p>
            </td>
            <td style="width:9.72%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt">
                    {{$father_fullName_ar[1]}}
                </p>
            </td>
            <td style="width:9.18%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الأب</span>
                </p>
            </td>
            <td rowspan="3"
                style="width:14.34%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Date of Death</span></strong>
                </p>
            </td>
            <td colspan="9" rowspan="3"
                style="border-top-style:solid; border-top-width:0.75pt; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                    {{$child->death_date}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.2%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Grandfather</span></strong>
                </p>
            </td>
            <td style="width:8.84%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$father_fullName_en[2]}}
                </p>
            </td>
            <td style="width:9.72%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:9pt">
                    {{$father_fullName_ar[2]}}
                </p>
            </td>
            <td style="width:9.18%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الجد</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.2%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Family</span></strong>
                </p>
            </td>
            <td style="width:8.84%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$father_fullName_en[3]}}
                </p>
            </td>
            <td style="width:9.72%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt">
                    {{$father_fullName_ar[3]}}
                </p>
            </td>
            <td style="width:9.18%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">العائلة</span>
                </p>
            </td>
        </tr>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; border-bottom:1.5pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td colspan="15"
                style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#17365d">Guardian Basic Information</span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td rowspan="4"
                style="width:13.16%; border-right:2.25pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.28pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Guardian Name</span></strong>
                </p>
            </td>
            <td style="width:9.22%; border-left:2.25pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.28pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Name</span></strong>
                </p>
            </td>
            <td style="width:9.16%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$guardian_fullName_en[0]}}
                </p>
            </td>
            <td style="width:9.16%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt">
                    {{$guardian_fullName_ar[0]}}
                </p>
            </td>
            <td style="width:9.16%; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الاسم الأول</span>
                </p>
            </td>
            <td style="width:14.62%; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Relation to child</span></strong>
                </p>
            </td>
            <td colspan="9"
                style="border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$child->guardian->rel_to_en}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-left:2.25pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.28pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Father</span></strong>
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$guardian_fullName_en[1]}}
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt">
                    {{$guardian_fullName_ar[1]}}
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الأب</span>
                </p>
            </td>
            <td style="width:14.62%; border-top:1.5pt solid #ffffff; border-right-style:solid; border-right-width:0.75pt; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.03pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">ID No.</span></strong>
                </p>
            </td>
            <td style="width:3.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$child->guardian->guardian_id_no}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-left:2.25pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.28pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Grandfather</span></strong>
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$guardian_fullName_en[2]}}
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt">
                    {{$guardian_fullName_ar[2]}}
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">الجد</span>
                </p>
            </td>
            <td style="width:14.62%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Marital Status</span></strong>
                </p>
            </td>
            <td colspan="9"
                style="border-top-style:solid; border-top-width:0.75pt; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <input type="checkbox"
                           {{ old('guardian_martial_status', $child->guardian->guardian_martial_status) === 'Married' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132">Married</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('guardian_martial_status', $child->guardian->guardian_martial_status) === 'Widow' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Widow</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('guardian_martial_status', $child->guardian->guardian_martial_status) === 'Divorced' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Divorced</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.22%; border-top:1.5pt solid #ffffff; border-left:2.25pt solid #ffffff; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.28pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Family</span></strong>
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #f2f2f2; border-bottom:0.75pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    {{$guardian_fullName_en[3]}}
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt">
                    {{$guardian_fullName_ar[3]}}
                </p>
            </td>
            <td style="width:9.16%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:0.75pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt">
                    <span style="font-family:Arial; font-weight:bold; color:#333132" dir="rtl">العائلة</span>
                </p>
            </td>
            <td style="width:14.62%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Work</span></strong>
                </p>
            </td>
            <td colspan="9"
                style="border-top:0.75pt solid #f2f2f2; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <input type="checkbox"
                           {{ old('work', $child->guardian->work) === 'Employee' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Employee</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0; </span>
                    <input
                        type="checkbox"
                        {{ old('work', $child->guardian->work) === 'Jobless' ? 'checked' : '' }}
                        name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Jobless</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0; </span>
                    <input type="checkbox"
                           {{ old('work', $child->guardian->work) === 'Irregular work' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Irregular work</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:13.16%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Education Level</span></strong>
                </p>
            </td>
            <td colspan="14"
                style="border-top:0.75pt solid #f2f2f2; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <input type="checkbox"
                           {{ old('edu_level', $child->guardian->edu_level) === 'Primary' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Primary</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0;&#xa0; </span><input
                        type="checkbox"
                        {{ old('edu_level', $child->guardian->edu_level) === 'Preparator' ? 'checked' : '' }}
                        name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Preparator</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0; </span><input
                        type="checkbox"
                        {{ old('edu_level', $child->guardian->edu_level) === 'Secondary' ? 'checked' : '' }}

                        name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Secondary</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span><input type="checkbox"
                                                                                               {{ old('edu_level', $child->guardian->edu_level) === 'Diploma' ? 'checked' : '' }}
                                                                                               name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Diploma</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0; </span><input type="checkbox"
                                                                                                     {{ old('edu_level', $child->guardian->edu_level) === 'University' ? 'checked' : '' }}
                                                                                                     name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> University</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span><input type="checkbox"
                                                                                               {{ old('edu_level', $child->guardian->edu_level) === 'Higher Degrees' ? 'checked' : '' }}

                                                                                               name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Higher Degrees</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('edu_level', $child->guardian->edu_level) === 'Vocational' ? 'checked' : '' }}

                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Vocational</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('edu_level', $child->guardian->edu_level) === 'Illiterate' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Illiterate</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:13.16%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Monthly Salary</span></strong>
                </p>
            </td>
            <td colspan="14"
                style="border-top:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <input type="checkbox"
                           {{ old('monthly_salary', $child->guardian->monthly_salary) === '000-200 GBP' ? 'checked' : '' }}
                           name=""><span style="font-family:'Arial Narrow'; color:#333132"> 000 - 200 GBP</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span>
                    <input
                        type="checkbox"
                        {{ old('monthly_salary', $child->guardian->monthly_salary) === '200-500 GBP' ? 'checked' : '' }}
                        name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> 200 - 500 GBP</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0;&#xa0; </span>
                    <input
                        type="checkbox"
                        {{ old('monthly_salary', $child->guardian->monthly_salary) === 'More than 500 BGP' ? 'checked' : '' }}
                        name=""><span style="font-family:'Arial Narrow'; color:#333132"> More than 500 GBP</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                </p>
            </td>
        </tr>
    </table>
    <p dir="rtl"
       style="margin-top:0pt; margin-bottom:0pt; line-height:normal; border-bottom:1.5pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <div style="text-align:right">
        <table cellspacing="0" cellpadding="0" style="width:100%; margin-left:auto; border-collapse:collapse">
            <tr style="height:14.15pt">
                <td colspan="12"
                    style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                        <strong><span
                                style="font-family:'Arial Narrow'; color:#17365d">Contact Information</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td colspan="10"
                    style="border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Contact Numbers</span></strong>
                    </p>
                </td>
                <td colspan="2"
                    style="border-left:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Address</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:5%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Line Type</span></strong>
                    </p>
                </td>
                <td style="width:9%; border-right:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Zip code</span></strong>
                    </p>
                </td>
                <td style="width:10.32%; border-right:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Area Code</span></strong>
                    </p>
                </td>
                <td colspan="7"
                    style="border-left:1.5pt solid #ffffff; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Number</span></strong>
                    </p>
                </td>

                <td colspan="10"
                    style="width:20.12%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:0.75pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        {{$child->guardian->address_details}}
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:5%; border-top:1.5pt solid #ffffff; border-right-style:solid; border-right-width:0.75pt; border-bottom:1.5pt solid #ffffff; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Phone Number</span></strong>
                    </p>
                </td>
                <td style="width:9%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">+972</span>
                    </p>
                </td>
                <td style="width:10.32%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">0X</span>
                    </p>
                </td>
                <td style="width:3.7%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:9pt">
                        {{$child->guardian->phone_no}}
                    </p>
                </td>


            </tr>
            <tr style="height:14.15pt">
                <td style="width:5%; border-top:1.5pt solid #ffffff; border-right-style:solid; border-right-width:0.75pt; border-bottom:1.5pt solid #ffffff; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="OLE_LINK66"></a><a name="OLE_LINK69"></a><a name="_Hlk411849184"><strong><span
                                    style="font-family:'Arial Narrow'; color:#333132">Mobile#1 (For the Guardian)</span></strong></a>
                    </p>
                </td>
                <td style="width:9%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">+972</span>
                    </p>
                </td>
                <td style="width:10.32%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">059</span>
                    </p>
                </td>
                <td style="width:3.7%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:9pt">
                        {{$child->guardian->mobile_1}}
                    </p>
                </td>


            </tr>
            <tr style="height:14.15pt">
                <td style="width:5%; border-top:1.5pt solid #ffffff; border-right-style:solid; border-right-width:0.75pt; border-bottom:1.5pt solid #ffffff; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="_Hlk411247774"><strong><span
                                    style="font-family:'Arial Narrow'; color:#333132">Mobile#2</span></strong></a>
                    </p>
                </td>
                <td style="width:9%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">+972</span>
                    </p>
                </td>
                <td style="width:10.32%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">059</span>
                    </p>
                </td>

                <td style="width:3.78%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:9pt">
                        {{$child->guardian->mobile_2}}
                    </p>
                </td>

            </tr>
        </table>
    </div>
    <p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; border-bottom:3pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
        <br style="page-break-before:always; clear:both">
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td style="width:100%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:15pt">
                    <a name="OLE_LINK163"><strong><span style="font-family:'Arial Narrow'; color:#17365d">Family Configuration</span></strong></a>
                </p>
            </td>
        </tr>
    </table>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td colspan="4"
                style="border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">Number of Family’s Members</span></strong><a
                        name="OLE_LINK166"><strong><span
                                style="font-family:'Arial Narrow'; color:#333132">*</span></strong></a>
                </p>
            </td>
            <td style="width:6.18%; border-right:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$child->family->members_count}}
                </p>
            </td>
            <td colspan="7" rowspan="4"
                style="border-left:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:top">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <span style="font-family:'Wingdings 2'; font-size:5.33pt; "><sup></sup></span><span
                        style="font-family:'Arial Narrow'; color:#333132">(Only Father, Mother, Guardian and any other unmarried dependent)</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; ">&#xa0;</span></strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <span style="font-family:'Arial Narrow'; color:#333132" dir="rtl">&#xa0;</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td colspan="4"
                style="border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">Members in Universities</span></strong>
                </p>
            </td>
            <td style="width:6.18%; border-right:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$child->family->members_university}}

                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td colspan="4"
                style="border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Members in Schools</span></strong>
                </p>
            </td>
            <td style="width:6.18%; border-right:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$child->family->members_school}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td colspan="4"
                style="border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Workers Members</span></strong>
                </p>
            </td>
            <td style="width:6.18%; border-right:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$child->family->members_worker}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td colspan="12" style="padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; ">▼Note:</span></strong><span
                        style="font-family:'Arial Narrow'"> In the table </span><u><span
                            style="font-family:'Arial Narrow'; ">START</span></u><span
                        style="font-family:'Arial Narrow'"> by the Guardian, Mother, and children, from oldest to the youngest and other dependents.</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">No.</span></strong>
                </p>
            </td>
            <td style="width:11.52%; border-right:0.75pt solid #ffffff; border-left:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">First Name</span></strong>
                </p>
            </td>
            <td style="width:6.46%; border-right:0.75pt solid #ffffff; border-left:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <a name="OLE_LINK192"><strong><span
                                style="font-family:'Arial Narrow'; color:#333132">Sex</span></strong></a><strong><span
                            style="font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>1</sup></span></strong>
                </p>
            </td>
            <td colspan="2"
                style="border-right:0.75pt solid #ffffff; border-left:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <a name="OLE_LINK195"><strong><span
                                style="font-family:'Arial Narrow'; color:#333132">Relation</span></strong></a><strong><span
                            style="font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>2</sup></span></strong>
                </p>
            </td>
            <td style="border-right:0.75pt solid #ffffff; border-left:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Birth Date</span></strong>
                </p>
            </td>
            <td style="width:14.38%; border-right:0.75pt solid #ffffff; border-left:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">Education Level</span></strong><strong><span
                            style="font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>3</sup></span></strong>
                </p>
            </td>
            <td style="width:9%; border-right:0.75pt solid #ffffff; border-left:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Fees </span></strong><strong><span
                            style="font-family:'Arial Narrow'; font-size:8pt; color:#333132">(GBP)</span></strong>
                </p>
            </td>
            <td style="width:11.7%; border-right:0.75pt solid #ffffff; border-left:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">Health Status</span></strong><strong><span
                            style="font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>4</sup></span></strong>
                </p>
            </td>
            <td style="width:11.6%; border-right:0.75pt solid #ffffff; border-left:0.75pt solid #ffffff; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Type of work</span></strong>
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">1</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[1]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[1]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[1]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[1]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[1]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[1]['fees']}}

                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[1]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[1]['health_status']}}
                </p>
            </td>

        </tr>
        {{--        @for()--}}
        {{--        @endfor--}}
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">2</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[2]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[2]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[2]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[2]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[2]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[2]['fees']}}

                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[2]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[2]['health_status']}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">3</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[3]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[3]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[3]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[3]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[3]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[3]['fees']}}

                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[3]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[3]['health_status']}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">4</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[4]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[4]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[4]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[4]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[4]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[4]['fees']}}

                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[4]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[4]['health_status']}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">5</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[5]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[5]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[5]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[5]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[5]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[5]['fees']}}

                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[5]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[5]['health_status']}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">6</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[6]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[6]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[6]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[6]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[6]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[6]['fees']}}

                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[6]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[6]['health_status']}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">7</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[7]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[7]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[7]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[7]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[7]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[7]['fees']}}

                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[7]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[7]['health_status']}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">8</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[8]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[8]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[8]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[8]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[8]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[8]['fees']}}
                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[8]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[8]['health_status']}}
                </p>
            </td>

        </tr>
        <tr style="height:14.15pt">
            <td style="width:3.62%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <span style="font-family:'Arial Narrow'">9</span>
                </p>
            </td>
            <td style="width:11.52%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK173"></a><a name="OLE_LINK174"></a><a name="_Hlk411851049"></a>
                    <span
                        style="font-family:'Arial Narrow'"> </span>
                    {{$json_data[9]['name']}}
                </p>
            </td>
            <td style="width:6.46%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[9]['sex']}}
                </p>
            </td>
            <td colspan="2"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[9]['relation']}}
                </p>
            </td>

            <td style="width:14.38%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[9]['dob']}}
                </p>
            </td>
            <td style="width:9%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[9]['edu_level']}}
                </p>
            </td>
            <td style="width:11.7%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[9]['fees']}}
                </p>
            </td>
            <td style="width:11.6%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[9]['income']}}
                </p>
            </td>
            <td style="width:11.22%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    {{$json_data[9]['health_status']}}
                </p>
            </td>

        </tr>
        {{--4 --}}

        {{-- 4--}}
        <tr style="height:14.15pt">
            <td colspan="6"
                style="border-top:0.75pt solid #f2f2f2; border-left:0.75pt solid #f2f2f2; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">▼Use the following terms when you fill the table</span></strong>
                </p>
            </td>
            <td colspan="6"
                style="border-top:0.75pt solid #f2f2f2; border-right:0.75pt solid #f2f2f2; border-bottom:1.5pt solid #ffffff; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:41.9pt">
            <td colspan="12"
                style="border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">1 Sex: </span></strong><span
                        style="font-family:'Arial Narrow'; color:#333132">M/F</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">2 Relation: </span></strong><span
                        style="font-family:'Arial Narrow'; color:#333132">Mother/Brother/Sister/Son/Daughter/Grandfather/Grandmother</span><strong><span
                            style="font-family:'Arial Narrow'; color:#333132"> </span></strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">3 Education Level: </span></strong><span
                        style="font-family:'Arial Narrow'; color:#333132">Kindergarten/Primary/Preparator/Secondary/Diploma/University/HigherDegrees/Vocational/Illiterate</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">4 Health Status: </span></strong><span
                        style="font-family:'Arial Narrow'; color:#333132">Healthy/Unhealthy/Special Need</span>
                </p>
            </td>
        </tr>
        <tr style="height:0pt">
            <td style="width:19.5pt">
            </td>
            <td style="width:62.05pt">
            </td>
            <td style="width:34.8pt">
            </td>
            <td style="width:13.45pt">
            </td>
            <td style="width:33.3pt">
            </td>
            <td style="width:13.9pt">
            </td>
            <td style="width:49.75pt">
            </td>
            <td style="width:77.45pt">
            </td>
            <td style="width:48.5pt">
            </td>
            <td style="width:63pt">
            </td>
            <td style="width:62.5pt">
            </td>
            <td style="width:60.45pt">
            </td>
        </tr>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; border-bottom:3pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'">&#xa0;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td style="width:100%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:15pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#17365d">Educational Status of The Child and Their Family</span></strong>
                </p>
            </td>
        </tr>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td colspan="4"
                style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#17365d">Child Education Status</span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:21%; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Educational Level</span></strong>
                </p>
            </td>
            <td colspan="3"
                style="border-bottom:1pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <input type="checkbox"
                           {{ old('child_edu_level', $child->education->child_edu_level) === 'Under School Age' ? 'checked' : '' }}
                           name=""><span style="font-family:'Arial Narrow'; color:#333132"> Under School Age</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span><input
                        type="checkbox"
                        {{ old('child_edu_level', $child->education->child_edu_level) === 'Kindergarten' ? 'checked' : '' }}
                        name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Kindergarten</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0;&#xa0; </span><input
                        {{ old('child_edu_level', $child->education->child_edu_level) === 'Primary School' ? 'checked' : '' }}
                        type="checkbox" name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Primary School</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:21%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">School Name</span></strong>
                </p>
            </td>
            <td colspan="3"
                style="border-top:1pt solid #f2f2f2; border-bottom:1pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">&#xa0; {{$child->education->school_name}}</span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td rowspan="3"
                style="width:21%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Intensive lessons</span></strong>
                </p>
            </td>
            <td colspan="2"
                style="border-top:1pt solid #f2f2f2; border-left:1.5pt solid #ffffff; border-bottom:1pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Does the child need intensive lessons?</span></strong>
                </p>
            </td>
            <td style="width:47.34%; border-top:1pt solid #f2f2f2; border-bottom:1pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <input type="checkbox"
                           {{ old('need_lessons', $child->education->need_lessons) == '1' ? 'checked' : '' }}

                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Yes</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span><input type="checkbox"
                                                                                               {{ old('need_lessons', $child->education->need_lessons) == '0' ? 'checked' : '' }}

                                                                                               name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> No</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:9.26%; border-top:1.5pt solid #ffffff; border-right:1pt solid #ffffff; border-left:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:4.9pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">What is it?</span></strong>
                </p>
            </td>
            <td colspan="2"
                style="border-top:1pt solid #f2f2f2; border-left:1pt solid #ffffff; border-bottom:1pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.9pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <input type="checkbox"
                           @if(in_array('English',$lessonsArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> English</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           @if(in_array('Arabic',$lessonsArray))checked
                           @endif                                      name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Arabic</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           @if(in_array('Mathematics',$lessonsArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Mathematics</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           @if(in_array('Science',$lessonsArray))checked
                           @endif                                                                       name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Science</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           @if(in_array('Other',$lessonsArray))checked
                           @endif                                                        name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Other (Please Specify </span>@if(in_array('Other',$lessonsArray))
                        {{end($lessonsArray)}}
                    @endif <span
                        style="font-family:'Arial Narrow'; color:#333132">)</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td colspan="2"
                style="border-top:1pt solid #f2f2f2; border-left:1.5pt solid #ffffff; border-bottom:1pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Cost required to improve the Child Education</span></strong>
                </p>
            </td>
            <td style="width:47.34%; border-top:1pt solid #f2f2f2; border-bottom:1pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    {{ $child->education->cost_lesson}}<span
                        style="font-family:'Arial Narrow'; color:#333132"> GBP</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:21%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Child Hobbies and Activities</span></strong>
                </p>
            </td>
            <td colspan="3"
                style="border-top:1pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    <input type="checkbox"
                           @if(in_array('Football',$hobbiesArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Football </span>
                    <input type="checkbox"
                           @if(in_array('Swimming',$hobbiesArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Swimming </span>
                    <input type="checkbox"
                           @if(in_array('Fishing',$hobbiesArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Fishing </span>
                    <input type="checkbox"
                           @if(in_array('Drawing',$hobbiesArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Drawing </span>
                    <input type="checkbox"
                           @if(in_array('Reading',$hobbiesArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Reading</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           @if(in_array('Singing',$hobbiesArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Singing</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           @if(in_array('Other',$hobbiesArray))checked @endif
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Other </span>@if(in_array('Other',$hobbiesArray))
                        {{end($hobbiesArray)}}
                    @endif
                </p>
            </td>
        </tr>
        <tr style="height:0pt">
            <td style="width:112.8pt">
            </td>
            <td style="width:49.75pt">
            </td>
            <td style="width:120.3pt">
            </td>
            <td style="width:254.3pt">
            </td>
        </tr>
    </table>
    <p dir="rtl"
       style="margin-top:0pt; margin-bottom:0pt; line-height:normal; border-bottom:3pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td style="width:100%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:15pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#17365d">Health Situation for Child and Their Family</span></strong>
                </p>
            </td>
        </tr>
    </table>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td colspan="2"
                style="border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    <a name="OLE_LINK120"><strong><span style="font-family:'Arial Narrow'; color:#333132">The Child is in a Good Health</span></strong></a><strong><span
                            style="font-family:'Arial Narrow'; color:#333132">?</span></strong>
                </p>
            </td>
            <td colspan="5"
                style="border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <a name="OLE_LINK117"></a><a name="OLE_LINK118"></a>
                    <input type="checkbox"
                           {{ old('good_health', $child->health->good_health) == '1' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Yes</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('good_health', $child->health->good_health) == '0' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> No</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td colspan="2"
                style="border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">The Child or a family member suffering from a disease?</span></strong>
                </p>
            </td>
            <td colspan="5"
                style="border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <input type="checkbox"
                           {{ old('has_disease', $child->health->has_disease) == '1' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> Yes</span><span
                        style="font-family:'Arial Narrow'; color:#333132">&#xa0; </span>
                    <input type="checkbox"
                           {{ old('has_disease', $child->health->has_disease) == '0' ? 'checked' : '' }}
                           name=""><span
                        style="font-family:'Arial Narrow'; color:#333132"> No</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:16.46%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt">
                    <a name="_Hlk411857277"><strong><span
                                style="font-family:'Arial Narrow'; color:#333132">Patient Name</span></strong></a>
                </p>
            </td>
            <td colspan="3"
                style="border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Disease</span></strong>
                </p>
            </td>
            <td style="width:18.06%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Treatment Cost GBP</span></strong>
                </p>
            </td>
            <td style="width:21.94%; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:9pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">Special Needs Devices</span></strong><strong><span
                            style="line-height:115%; font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>1</sup></span></strong>
                </p>
            </td>
            <td style="width:15.16%; border-top:1.5pt solid #ffffff; border-left:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Notes</span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:16.46%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <ol type="1" style="margin:0pt; padding-left:0pt">
                    <li style="margin-left:16.21pt; padding-left:6.84pt; font-family:'Arial Narrow'; font-size:9pt; color:#333132">
                        <a name="_Hlk299440041"></a><a name="_Hlk411857393"></a>{{$json_patients[1]['patient_name']}}
                    </li>
                </ol>
            </td>
            <td colspan="3"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[1]['disease']}}
                </p>
            </td>
            <td style="width:18.06%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[1]['treatment_cost']}}
                </p>
            </td>
            <td style="width:21.94%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[1]['special_needs']}}
                </p>
            </td>
            <td style="width:15.16%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[1]['notes']}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:16.46%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <ol start="2" type="1" style="margin:0pt; padding-left:0pt">
                    <li style="margin-left:16.21pt; padding-left:6.84pt; font-family:'Arial Narrow'; font-size:9pt; color:#333132">
                        <a name="_Hlk299440041"></a><a name="_Hlk411857393"></a>{{$json_patients[1]['patient_name']}}
                    </li>
                </ol>
            </td>
            <td colspan="3"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[2]['disease']}}
                </p>
            </td>
            <td style="width:18.06%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[2]['treatment_cost']}}
                </p>
            </td>
            <td style="width:21.94%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[2]['special_needs']}}
                </p>
            </td>
            <td style="width:15.16%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[2]['notes']}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:16.46%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <ol start="3" type="1" style="margin:0pt; padding-left:0pt">
                    <li style="margin-left:16.21pt; padding-left:6.84pt; font-family:'Arial Narrow'; font-size:9pt; color:#333132">
                        <a name="_Hlk299440041"></a><a name="_Hlk411857393"></a>
                        {{$json_patients[3]['patient_name']}}
                    </li>
                </ol>
            </td>
            <td colspan="3"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[3]['disease']}}
                </p>
            </td>
            <td style="width:18.06%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[3]['treatment_cost']}}
                </p>
            </td>
            <td style="width:21.94%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[3]['special_needs']}}
                </p>
            </td>
            <td style="width:15.16%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[3]['notes']}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:16.46%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <ol start="4" type="1" style="margin:0pt; padding-left:0pt">
                    <li style="margin-left:16.21pt; padding-left:6.84pt; font-family:'Arial Narrow'; font-size:9pt; color:#333132">
                        <a name="_Hlk299440041"></a><a name="_Hlk411857393"></a>
                        {{$json_patients[4]['patient_name']}}
                    </li>
                </ol>
            </td>
            <td colspan="3"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[4]['disease']}}
                </p>
            </td>
            <td style="width:18.06%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[4]['treatment_cost']}}
                </p>
            </td>
            <td style="width:21.94%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[4]['special_needs']}}
                </p>
            </td>
            <td style="width:15.16%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[4]['notes']}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:16.46%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <ol start="5" type="1" style="margin:0pt; padding-left:0pt">
                    <li style="margin-left:16.21pt; padding-left:6.84pt; font-family:'Arial Narrow'; font-size:9pt; color:#333132">
                        <a name="_Hlk299440041"></a><a name="_Hlk411857393"></a>
                        {{$json_patients[5]['patient_name']}}
                    </li>
                </ol>
            </td>
            <td colspan="3"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[5]['disease']}}
                </p>
            </td>
            <td style="width:18.06%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[5]['treatment_cost']}}
                </p>
            </td>
            <td style="width:21.94%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[5]['special_needs']}}
                </p>
            </td>
            <td style="width:15.16%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[5]['notes']}}
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td style="width:16.46%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <ol start="6" type="1" style="margin:0pt; padding-left:0pt">
                    <li style="margin-left:16.21pt; padding-left:6.84pt; font-family:'Arial Narrow'; font-size:9pt; color:#333132">
                        <a name="_Hlk299440041"></a><a name="_Hlk411857393"></a>
                        {{$json_patients[6]['patient_name']}}
                    </li>
                </ol>
            </td>
            <td colspan="3"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[6]['disease']}}
                </p>
            </td>
            <td style="width:18.06%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[6]['treatment_cost']}}
                </p>
            </td>
            <td style="width:21.94%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[6]['special_needs']}}
                </p>
            </td>
            <td style="width:15.16%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[6]['notes']}}
                </p>
            </td>
        </tr>
        {{-- 1 --}}
        <tr style="height:14.15pt">
            <td style="width:16.46%; border-right:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle">
                <ol start="7" type="1" style="margin:0pt; padding-left:0pt">
                    <li style="margin-left:16.21pt; padding-left:6.84pt; font-family:'Arial Narrow'; font-size:9pt; color:#333132">
                        <a name="_Hlk299440041"></a><a name="_Hlk411857393"></a>
                        {{$json_patients[7]['patient_name']}}
                    </li>
                </ol>
            </td>
            <td colspan="3"
                style="border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[7]['disease']}}
                </p>
            </td>
            <td style="width:18.06%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[7]['treatment_cost']}}
                </p>
            </td>
            <td style="width:21.94%; border-right:1.5pt solid #f2f2f2; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[7]['special_needs']}}
                </p>
            </td>
            <td style="width:15.16%; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$json_patients[7]['notes']}}
                </p>
            </td>
        </tr>
        {{-- 1 --}}

        <tr style="height:14.15pt">
            <td colspan="3"
                style="border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">▼Use the following terms when you fill the table</span></strong>
                </p>
            </td>
            <td colspan="4"
                style="border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
                </p>
            </td>
        </tr>
        <tr style="height:14.15pt">
            <td colspan="7"
                style="border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#333132">1 Special Needs Devices: </span></strong><span
                        style="font-family:'Arial Narrow'; color:#333132">Wheel chair/Water mattress/Walking sticks/Diapers/Artificial extremities/Oxygen/</span><a
                        name="OLE_LINK136"></a><a name="OLE_LINK226"><span
                            style="font-family:'Arial Narrow'; color:#333132">Other (Please Specify </span></a>otherrr<span
                        style="font-family:'Arial Narrow'; color:#333132">)</span>
                </p>
            </td>
        </tr>
        <tr style="height:0pt">
            <td style="width:88.65pt">
            </td>
            <td style="width:131pt">
            </td>
            <td style="width:14.2pt">
            </td>
            <td style="width:7.65pt">
            </td>
            <td style="width:97.3pt">
            </td>
            <td style="width:118.2pt">
            </td>
            <td style="width:81.65pt">
            </td>
        </tr>
    </table>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100%; border-collapse:collapse">
        <tr style="height:32.65pt">
            <td style="width:16.46%; border-right:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#333132">Medications</span></strong>
                </p>
            </td>
            <td style="width:83.42%; border-top:1.5pt solid #f2f2f2; border-right:1.5pt solid #ffffff; border-left:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                    {{$child->health->medications}}
                </p>
            </td>
        </tr>
    </table>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td style="width:100%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:15pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#17365d">ECONOMIC STATUS OF THE FAMILY</span></strong>
                </p>
            </td>
        </tr>
    </table>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <div style="text-align:center">
        <table cellspacing="0" cellpadding="0"
               style="width:100%; margin-right:auto; margin-left:auto; border-collapse:collapse">
            <tr style="height:14.15pt">
                <td colspan="5"
                    style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#17365d">Source of Income</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:20.72%; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="_Hlk411859725"><strong><span style="font-family:'Arial Narrow'; color:#333132">Jobs for family members</span></strong></a>
                    </p>
                </td>
                <td style="width:12.5%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <a name="OLE_LINK179"></a><a name="OLE_LINK180"></a>
                        <input type="checkbox"
                               {{ old('jobs_members', $child->economic->jobs_members) === 'No' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> No</span>
                    </p>
                </td>
                <td style="width:22.26%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('jobs_members', $child->economic->jobs_members) === 'From GBP 0 - GBP 200' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> From GBP 0 – </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 200</span>
                    </p>
                </td>
                <td style="width:22.26%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('jobs_members', $child->economic->jobs_members) === 'From GBP 200 - GBP 500' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> From GBP 200 – </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 500</span>
                    </p>
                </td>
                <td style="width:22.26%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <a name="OLE_LINK209"></a>
                        <input type="checkbox"
                               {{ old('jobs_members', $child->economic->jobs_members) === 'More than GBP 500' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> More than </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 500</span>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:20.72%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span
                                style="font-family:'Arial Narrow'; color:#333132">Periodic Sponsorships</span></strong>
                    </p>
                </td>
                <td style="width:12.5%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('periodic_sponsorships', $child->economic->periodic_sponsorships) === 'No' ? 'checked' : '' }}
                               name=""><span style="font-family:'Arial Narrow'"> </span><span
                            style="font-family:'Arial Narrow'; color:#333132">No</span>
                    </p>
                </td>
                <td style="width:22.26%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('periodic_sponsorships', $child->economic->periodic_sponsorships) === 'From GBP 0 - GBP 60' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> From GBP 0 – </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 60</span>
                    </p>
                </td>
                <td style="width:22.26%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <input type="checkbox"
                               {{ old('periodic_sponsorships', $child->economic->periodic_sponsorships) === 'From GBP 60 - GBP 150' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> From GBP 60 – </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 150</span>
                    </p>
                </td>
                <td style="width:22.26%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('periodic_sponsorships', $child->economic->periodic_sponsorships) === 'More than GBP 150' ? 'checked' : '' }}
                               name=""><span style="font-family:'Arial Narrow'; color:#333132"> More than </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 150</span>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:20.72%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Irregular Aids</span></strong>
                    </p>
                </td>
                <td style="width:12.5%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('irregular_aids', $child->economic->irregular_aids) === 'No' ? 'checked' : '' }}
                               name=""><span style="font-family:'Arial Narrow'"> </span><span
                            style="font-family:'Arial Narrow'; color:#333132">No</span>
                    </p>
                </td>
                <td style="width:22.26%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('irregular_aids', $child->economic->irregular_aids) === 'From GBP 0 - GBP 100' ? 'checked' : '' }}

                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> From GBP 0 – </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 100</span>
                    </p>
                </td>
                <td style="width:22.26%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('irregular_aids', $child->economic->irregular_aids) === 'From GBP 100 - GBP 250' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> From GBP 100 - </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 250</span>
                    </p>
                </td>
                <td style="width:22.26%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('irregular_aids', $child->economic->irregular_aids) === 'More than GBP 250' ? 'checked' : '' }}
                               name=""><span style="font-family:'Arial Narrow'; color:#333132"> More than </span><span
                            style="font-family:'Arial Narrow'; color:#333132; background-color:#ffffff">GBP</span><span
                            style="font-family:'Arial Narrow'; color:#333132"> 250</span>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <p dir="rtl"
       style="margin-top:0pt; margin-bottom:0pt; line-height:normal; border-bottom:1.5pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <div style="text-align:center">
        <table cellspacing="0" cellpadding="0"
               style="width:100%; margin-right:auto; margin-left:auto; border-collapse:collapse">
            <tr style="height:14.15pt">
                <td colspan="6"
                    style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                        <strong><span
                                style="font-family:'Arial Narrow'; color:#17365d">Family Monthly Burden</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:20.72%; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="OLE_LINK205"></a><a name="OLE_LINK206"><strong><span
                                    style="font-family:'Arial Narrow'; color:#333132">House and Food Fees</span></strong></a><strong><span
                                style="font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>1</sup></span></strong>
                    </p>
                </td>
                <td style="width:12.5%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               @if($child->economic->house_fees == '0') checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> No</span>
                    </p>
                </td>
                <td style="width:21.94%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <a name="OLE_LINK194"></a><a name="OLE_LINK196"></a>
                        <input type="checkbox"
                               @if($child->economic->house_fees > '0') checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Yes  </span>{{$child->economic->house_fees}}
                        GBP</span>
                    </p>
                </td>
                <td colspan="3" style="padding-right:46pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">►1 House and Food Fees: </span></strong><span
                            style="font-family:'Arial Narrow'; color:#333132">Electricity/Water/Phone/Etc.</span>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:20.72%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="OLE_LINK201"></a><a name="OLE_LINK202"><strong><span
                                    style="font-family:'Arial Narrow'; color:#333132">Educational Fee</span></strong></a><strong><span
                                style="font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>2</sup></span></strong>
                    </p>
                </td>
                <td style="width:12.5%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               @if($child->economic->edu_fees == '0') checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> No</span>
                    </p>
                </td>
                <td style="width:21.94%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               @if($child->economic->edu_fees > '0') checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Yes </span>{{$child->economic->edu_fees}}
                        <span
                            style="font-family:'Arial Narrow'; color:#333132"> </span><span
                            style="font-family:'Arial Narrow'; color:#333132">GBP</span>
                    </p>
                </td>
                <td colspan="3" style="padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <strong><span
                                style="line-height:115%; font-family:'Arial Narrow'; font-size:8pt; color:#333132">►2 Educational Fee: </span></strong><span
                            style="line-height:115%; font-family:'Arial Narrow'; font-size:8pt; color:#333132">Fees/Transportation/Intensive lessons</span><span
                            style="font-family:'Arial Narrow'; color:#333132">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:20.72%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Rents</span></strong>
                    </p>
                </td>
                <td style="width:12.5%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               @if($child->economic->rents == '0') checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> No</span>
                    </p>
                </td>
                <td style="width:21.94%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               @if($child->economic->rents > '0') checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Yes </span>{{$child->economic->rents}}
                        <span
                            style="font-family:'Arial Narrow'; color:#333132"> </span><span
                            style="font-family:'Arial Narrow'; color:#333132">GBP</span>
                    </p>
                </td>
                <td style="width:17.14%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span></strong>
                    </p>
                </td>
                <td style="width:7.36%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
                    </p>
                </td>
                <td style="width:20.34%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:20.72%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Medical Fees</span></strong>
                    </p>
                </td>
                <td style="width:12.5%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               @if($child->economic->medical_fees == '0') checked @endif

                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> No</span>
                    </p>
                </td>
                <td style="width:21.94%; border-top:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"

                               @if($child->economic->medical_fees > '0') checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Yes </span><a name="OLE_LINK197"></a><a
                            name="OLE_LINK198"></a>5423<u><span
                                style="font-family:'Arial Narrow'; color:#333132"> </span></u><span
                            style="font-family:'Arial Narrow'; color:#333132">GBP</span>
                    </p>
                </td>
                <td style="width:17.14%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt">
                        <strong><span
                                style="font-family:'Arial Narrow'; font-size:9pt; color:#333132">Total</span></strong><span
                            style="font-family:'Arial Narrow'"> </span><strong><span
                                style="font-family:'Arial Narrow'; font-size:9pt; color:#333132">Monthly Burden</span></strong>
                    </p>
                </td>
                <td colspan="2" style="padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        566464646<span style="font-family:'Arial Narrow'; color:#333132">GBP</span>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <p dir="rtl"
       style="margin-top:0pt; margin-bottom:0pt; line-height:normal; border-bottom:1.5pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <!--    <div style="text-align:center">-->
    <!--        <table cellspacing="0" cellpadding="0" style="width:100%; margin-right:auto; margin-left:auto; border-collapse:collapse">-->
    <!--            <tr style="height:14.15pt">-->
    <!--                <td colspan="6" style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">-->
    <!--                        <strong><span style="font-family:'Arial Narrow'; color:#17365d">Family Needs</span></strong>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--            </tr>-->
    <!--            <tr style="height:14.15pt">-->
    <!--                <td rowspan="2" style="width:20.72%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">-->
    <!--                        <strong><span style="font-family:'Arial Narrow'; color:#333132">In-kind support</span></strong>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132">Fridge</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132">Oven</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132">Gas Cylinder</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132">Computer</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132"> Water Tank</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--            </tr>-->
    <!--            <tr style="height:14.15pt">-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132">Washing machine</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132">Stove</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132">Furniture</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132">Laptop</span>-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--                <td style="width:15.86%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">-->
    <!--                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">-->
    <!--                        <input type="checkbox" name="" ><span style="font-family:'Arial Narrow'; color:#333132"> Other </span>Otherewqew-->
    <!--                    </p>-->
    <!--                </td>-->
    <!--            </tr>-->
    <!--        </table>-->
    <!--    </div>-->
    <p dir="rtl"
       style="margin-top:0pt; margin-bottom:0pt; line-height:normal; border-bottom:1.5pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <div style="text-align:center">
        <table cellspacing="0" cellpadding="0"
               style="width:100%; margin-right:auto; margin-left:auto; border-collapse:collapse">
            <tr style="height:14.15pt">
                <td colspan="4"
                    style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle; background-color:#ffffff">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#17365d">Small Project That May Benefit the Family</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:20.72%; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Project Type</span></strong>
                    </p>
                </td>
                <td style="width:32.1%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        {{$child->economic->project_type}}

                    </p>
                </td>
                <td style="width:23.58%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Estimated Cost</span></strong>
                    </p>
                </td>
                <td style="width:23.6%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        {{$child->economic->project_cost}}
                        <u><span style="font-family:'Arial Narrow'; color:#333132"> (</span></u><span
                            style="font-family:'Arial Narrow'; color:#333132">GBP)</span>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <p dir="rtl"
       style="margin-top:0pt; margin-bottom:0pt; line-height:normal; border-bottom:3pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100.02%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td style="width:100%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#17365d">Resident Status of The Family</span></strong>
                </p>
            </td>
        </tr>
    </table>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <div style="text-align:center">
        <table cellspacing="0" cellpadding="0"
               style="width:100%; margin-right:auto; margin-left:auto; border-collapse:collapse">
            <tr style="height:14.15pt">
                <td colspan="7"
                    style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                        <strong><span
                                style="font-family:'Arial Narrow'; color:#17365d">Resident Situation</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:16.76%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Resident Status</span></strong>
                    </p>
                </td>
                <td style="width:13.22%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_status',$child->resident->resident_status) === 'Ownership' ? 'checked' : '' }}
                               name=""><span style="font-family:'Arial Narrow'; color:#333132"> Ownership</span>
                    </p>
                </td>
                <td style="width:15.84%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_status',$child->resident->resident_status) === 'Shared' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Shared</span>
                    </p>
                </td>
                <td style="width:19.64%; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_status',$child->resident->resident_status) === 'Rent  ' ? 'checked' : '' }}
                               name=""><a name="OLE_LINK233"><span
                                style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span><span
                                style="font-family:'Arial Narrow'; color:#333132">Rent </span></a>
                    </p>
                </td>
                <td style="width:15.48%; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Rent Cost (GBP)</span></strong>
                    </p>
                </td>
                <td colspan="2"
                    style="border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <span
                            style="font-family:'Arial Narrow'; color:#333132">(Monthly </span>{{$child->resident->rent_cost}}
                        <u><span
                                style="font-family:'Arial Narrow'; color:#333132"> (</span></u><span
                            style="font-family:'Arial Narrow'; color:#333132">GBP)</span>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:16.76%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Resident Type</span></strong>
                    </p>
                </td>
                <td style="width:13.22%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_type',$child->resident->resident_type) === 'Concrete' ? 'checked' : '' }}
                               name=""><span style="font-family:'Arial Narrow'"> </span><span
                            style="font-family:'Arial Narrow'; color:#333132">Concrete</span>
                    </p>
                </td>
                <td style="width:15.84%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_type',$child->resident->resident_type) === 'Asbestos' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Asbestos</span>
                    </p>
                </td>
                <td style="width:19.64%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_type',$child->resident->resident_type) === 'Zinc plate' ? 'checked' : '' }}

                               name=""><span style="font-family:'Arial Narrow'; color:#333132"> Zinc plate</span>
                    </p>
                </td>
                <td style="width:15.48%; border-top:1.5pt solid #ffffff; border-bottom:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">No. of Rooms</span></strong>
                    </p>
                </td>
                <td colspan="2"
                    style="border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        {{$child->resident->no_rooms}}
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:16.76%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="_Hlk411861310"><strong><span style="font-family:'Arial Narrow'; color:#333132">Resident Description</span></strong></a>
                    </p>
                </td>
                <td style="width:13.22%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_description',$child->resident->resident_description) === 'Good' ? 'checked' : '' }}
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Good</span>
                    </p>
                </td>
                <td style="width:15.84%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_description',$child->resident->resident_description) === 'Moderate' ? 'checked' : '' }}
                               name="Check4"><span style="font-family:'Arial Narrow'; color:#333132"> Moderate</span><span
                            style="width:182.77pt; font-family:'Arial Narrow'; display:inline-block">&#xa0;</span>
                    </p>
                </td>
                <td style="width:19.64%; border-top:1.5pt solid #f2f2f2; border-bottom:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <input type="checkbox"
                               {{ old('resident_description',$child->resident->resident_description) === 'Bad' ? 'checked' : '' }}
                               name="Check4"><span style="font-family:'Arial Narrow'; color:#333132"> Bad</span>
                    </p>
                </td>
                <td style="width:15.48%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <strong><span
                                style="font-family:'Arial Narrow'; color:#333132">House Area (m</span></strong><strong><span
                                style="line-height:115%; font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>2</sup></span></strong><strong><span
                                style="font-family:'Arial Narrow'; color:#333132">)</span></strong>
                    </p>
                </td>
                <td colspan="2"
                    style="border-top:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        {{$child->resident->house_area}}<u><span style="font-family:'Arial Narrow'; color:#333132"> m</span></u><u><span
                                style="line-height:115%; font-family:'Arial Narrow'; font-size:6pt; color:#333132"><sup>2</sup></span></u>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td rowspan="2"
                    style="width:16.76%; border-top:1.5pt solid #ffffff; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Resident Needs</span></strong>
                    </p>
                </td>
                <td style="width:13.22%; border-top:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <input type="checkbox"
                               @if(in_array('Paints',$residentNeedsArray,))checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Paints</span>
                    </p>
                </td>
                <td style="width:15.84%; border-top:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="OLE_LINK9"></a>
                        <input type="checkbox"
                               @if(in_array('Doors',$residentNeedsArray,))checked @endif
                               name=""><a name="OLE_LINK230"><span
                                style="font-family:'Arial Narrow'">&#xa0;</span><span
                                style="font-family:'Arial Narrow'; color:#333132">Doors</span></a>
                    </p>
                </td>
                <td style="width:19.64%; border-top:1.5pt solid #f2f2f2; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <input type="checkbox"
                               @if(in_array('Sewerage Network',$residentNeedsArray,))checked @endif
                               name=""><span style="font-family:'Arial Narrow'; color:#333132"> Sewerage Network</span>
                    </p>
                </td>
                <td colspan="2" style="padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <input type="checkbox" name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Asbestos</span>
                    </p>
                </td>
                <td style="width:15.18%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="OLE_LINK234"></a>
                        <input type="checkbox"
                               @if(in_array('Electricity',$residentNeedsArray,))checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Electricity</span>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:13.22%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <a name="OLE_LINK96"></a>
                        <input type="checkbox"
                               @if(in_array('Plaster',$residentNeedsArray))checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'"> </span><span
                            style="font-family:'Arial Narrow'; color:#333132">Plaster</span>
                    </p>
                </td>
                <td style="width:15.84%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <input type="checkbox"
                               @if(in_array('Windows',$residentNeedsArray))checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Windows</span>
                    </p>
                </td>
                <td style="width:19.64%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="checkbox"
                               @if(in_array('General Maintenance',$residentNeedsArray))checked @endif
                               name=""><span style="font-family:'Arial Narrow'; color:#333132"> General Maintenance</span>
                    </p>
                </td>
                <td colspan="2" style="padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <input type="checkbox"
                               @if(in_array('Roof',$residentNeedsArray))checked @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> Roof</span>
                    </p>
                </td>
                <td style="width:15.18%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <input type="checkbox"
                               @if(in_array('Roof',$residentNeedsArray))New Room @endif
                               name=""><span
                            style="font-family:'Arial Narrow'; color:#333132"> New Room</span>
                    </p>
                </td>
            </tr>
            <tr style="height:0pt">
                <td style="width:90pt">
                </td>
                <td style="width:71pt">
                </td>
                <td style="width:85.1pt">
                </td>
                <td style="width:105.5pt">
                </td>
                <td style="width:83.15pt">
                </td>
                <td style="width:20.85pt">
                </td>
                <td style="width:81.55pt">
                </td>
            </tr>
        </table>
    </div>
    <p dir="rtl"
       style="margin-top:0pt; margin-bottom:0pt; line-height:normal; border-bottom:3pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td style="width:100%; border-right-style:solid; border-right-width:2.25pt; border-left-style:solid; border-left-width:2.25pt; border-bottom:2.25pt solid #ffffff; padding-right:4.28pt; padding-left:4.28pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:15pt">
                    <strong><span
                            style="font-family:'Arial Narrow'; color:#17365d">Final Notes and Recommendations</span></strong><strong><span
                            style="font-family:'Arial Narrow'; color:#17365d">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:42.65pt">
            <td style="width:100%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                    {{$child->economic->notes}}

                </p>
            </td>
        </tr>
    </table>
    <p dir="rtl"
       style="margin-top:0pt; margin-bottom:0pt; line-height:115%; border-bottom:2.25pt solid #000000; padding-bottom:1pt; font-size:9pt">
        <span style="font-family:'Arial Narrow'; color:#333132" dir="ltr">&#xa0;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'">&#xa0;</span>
    </p>
    <table cellspacing="0" cellpadding="0" style="width:100%; border-collapse:collapse">
        <tr style="height:14.15pt">
            <td colspan="3"
                style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                    <strong><span style="font-family:'Arial Narrow'; color:#17365d">Attachments</span></strong>
                </p>
            </td>
        </tr>
        <tr style="height:32.05pt">
            <td style="width:33.34%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <input type="checkbox" checked name=""><span style="font-family:'Arial Narrow'; color:#333132"> Child personal photo </span><strong><span
                            style="font-family:'Arial Narrow'; color:#333132">(full length size)</span></strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <input type="checkbox" checked name=""><span style="font-family:'Arial Narrow'; color:#333132"> Last education certificate of the child (photo copy)</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <input type="checkbox"  checked name=""><span style="font-family:'Arial Narrow'; color:#333132"> Mother ID card (photo copy)</span>
                </p>
            </td>
            <td style="width:33.34%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <input type="checkbox" checked name=""><span style="font-family:'Arial Narrow'; color:#333132"> Child birth certificate (photo copy)</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <input type="checkbox" checked name=""><span style="font-family:'Arial Narrow'; color:#333132"> Guardian ID card (photo copy)</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <input type="checkbox" checked name=""><a name="OLE_LINK127"><span
                            style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span><span
                            style="font-family:'Arial Narrow'; color:#333132">Father death certificate (photo copy)</span></a>
                </p>
            </td>
            <td style="width:33.34%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:8pt">
                    <input type="checkbox" checked name=""><span style="font-family:'Arial Narrow'; color:#333132"> Medical report (if there is a patient in the family)</span>
                </p>
                <p style="margin-top:0pt; margin-left:11.25pt; margin-bottom:0pt; text-indent:-11.25pt; line-height:115%; font-size:8pt">
                    <input type="checkbox" checked name=""><span style="font-family:'Arial Narrow'; color:#333132"> Various photos include the child with the surrounding environment.</span>
                </p>
            </td>
        </tr>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'">&#xa0;</span>
    </p>
    <div style="text-align:center">
        <table cellspacing="0" cellpadding="0"
               style="width:100%; margin-right:auto; margin-left:auto; border-collapse:collapse">
            <tr style="height:14.15pt">
                <td colspan="4"
                    style="border-left-style:solid; border-left-width:3pt; padding-right:5.4pt; padding-left:3.9pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
                        <a name="_Hlk69123593"><strong><span style="font-family:'Arial Narrow'; color:#365f91">For Official Use</span></strong></a>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:18.52%; border-right:2.25pt solid #ffffff; padding-right:4.28pt; padding-left:5.4pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Visit Date</span></strong>
                    </p>
                </td>
                <td style="width:25.18%; border-right:2.25pt solid #ffffff; border-left:2.25pt solid #ffffff; padding-right:4.28pt; padding-left:4.28pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Name of Person in Charge</span></strong>
                    </p>
                </td>
                <td style="width:33.56%; border-right:2.25pt solid #ffffff; border-left:2.25pt solid #ffffff; padding-right:4.28pt; padding-left:4.28pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">&#xa0;</span></strong>
                    </p>
                </td>
                <td style="width:22.74%; border-left:2.25pt solid #ffffff; padding-right:5.4pt; padding-left:4.28pt; vertical-align:middle; background-color:#f2f2f2">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Supervised By:</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:14.15pt">
                <td style="width:18.52%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="date" name="" id="">
                    </p>
                </td>
                <td style="width:25.18%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
                        omar
                    </p>
                </td>
                <td style="width:33.56%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#d9d9d9">&#xa0;</span>
                    </p>
                </td>
                <td style="width:22.74%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">Social Welfare Section </span>
                    </p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#333132">Gaza Projects Unit</span>
                    </p>
                </td>
            </tr>
            <tr style="height:55.5pt">
                <td colspan="2" style="padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <strong><span style="font-family:'Arial Narrow'; color:#333132">Signature:</span></strong>
                    </p>
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
                        <input type="text" name="" value="">
                    </p>
                </td>
                <td style="width:33.56%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff">
                    <p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
                        <span style="font-family:'Arial Narrow'; color:#d9d9d9">&#xa0;</span>
                    </p>
                </td>
                <td style="width:22.74%; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff">
                    <p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:11pt">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIYAAABKCAYAAAB+UyxeAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAACjqSURBVHhe7Z1J1FZVdoZrklkmWSuTrJVhhhlkkGGGGWStDJKsSiVVqaqk+t6yx74tUcQGFZEepEdapRcVBEEUQaRTUFBQekGkl+6/2c/e5/3uvvf/vl+qSdWqCu9ir3Pu6e/Z79mnuef7+cpVXMVVXEVPVIbivYo/ZaBo0NfXV9xaBMUJJetV/LEApbV02IGUe/lyuG1lAwWRRv42YUCp7ir+UAg11AoB3fwo791NH1avvfh29cK0VdX8SSuq56esDJm6spo/xZ7NnTc5XMm8Sa9U77y5s7p44VIUZOheftQhlOZdxe8KudOFbmFA4ZcvX+6McoCCiDv48afVZlPq3GdfqZ4bu9xJMHvCS+7OhwDF9TAjwdyJr7grksye8LKnmWvkQEi7bM7a6ouz50s97nh9GTyX17mKbij95Mh911fMsMTDWs/CJx8ecsWiNNxZ419yFyUhjOiqle/Igc+qBdNXWbqXPS1p5kx8uZo2cmmHDPPMYsyzuCkjFoXySacyS7ler6Wba3nDegRhSPPRBweszrpSeUXQ0gX/P+BvbOg/QpqKiWeU31ddOH/RFHWs2rHlo2rdis3VuTLagPI0OzgVZDh+7JSP6NlGiJljXqyeG7c8FGYicgjkRYmE4UKM58ZaHhOIgUAGKR2LMH/yymqOuaQR+chPWuqDDPgpa461w+s0IkGQVxauLzUHWm3/i9Jtf1wojXe0dNF5Qdz2Qiy/fM63ad0O72AUSAeGP0YsiqWT8a9atrHk6A/KpsxcLiDf9FFL3ZWSsRy4i2eu9vRMJzL3pEP5IghkwB+EsOcSh6VAKGfOxJhOFO4EsynF05rr4RaPQE6eIcjbr+8orWzC3uWfSlf/YVHa41DntkXIYZ8e+rzauXVPteald6pF1sl0fKSpM4gceR4HuUyIARFiZC8LYhghpo5Y7ErEj8KQbuhGPMDzLFNEjPzlXs7kpxd5OfhX22KSqUmK1+jGTx7CSeuKTBLkWVHtsSnh4CdHq13vfVLt33ukOnbkRLX4udc8XkSItEEQDyuEUjxTWRvW7nuKan53KGU3QH+FhIm+ePFSdeTgZ9Ulc/t3ZvEU0HEzRy/zjkVmjF7a8U95erGPRplp5O3X34t8nfqapFD5Csf1kWxkmDx8kZeLMqePWuZEmTV+eTXHSANJ6OQL5+sVPqjLC09tpdyJtlp5lIn5pwwXM/2kWWoLQggh8qF4WQlEZMF/4rNTnXrqesPN+PTQcbcIqiusR7E6Vp67Hr7S62/D6lhS1NkbJW0H3Roi0Ogvzp33jkZhWSY9tdCUusyUucjdqc8s8XA6nFGKS/ixI5+X0upOfmPlliCCpcGFCF6uLchQoCvUOn6GlbNk1hrPA2hruyOF/Ey9MVdDvNo/a1xMKzOsLlw6c8G0VyNTl7KzKz95Zlp/4EIMRETg/SAIpEF8ZGMRLJ769Izs3XXAy+v1PoLC6TNZB6we1oE6IYn6UNOMoLxWx2dF/TVKhCcQeOzVEEY926BppuipI5ZUzz6xwJWMoDyIgOCfXMgxcdgLnh6XZxSMC0FczL9hzbtuLQDmks7lhaaalSAtflbqlIufMkhDubIE7U6sR3MJKKDDEPKjEMSnFguDwDzzPlgPFNxGt7oEynBSlCnJLVAhxluvbfe2E680kEHrgEwMQeW368lQe8gPKbAM+LEa/g7m11SCdCur0KFGu9My2lGM4Gkjl4RYB7qyn3ihGv/YfA9jJE80oox9ZH717JMLgjzPBGEgCS5KdrJYurAAhFn88IVOEkgBnAglvxPE/FimGaONDJCikCVPJ0Btzm1v+vssz4uhOBOflqwcn0aKxZhu7cF9zuIIu3ypLqDdJ+1nFK7Fa0wL9mxtZW2EleCZNvt0ZvERVi8628QA1BHSrEzhAtaCvJAiryuQzprDidEsBxQ61Mhp5K/d8Gy0jmdqQDlOiEIOwlCoSIKlmPD4865sEYVwCIB1GffovE7Y2KHznCCEZesBST7cub/aYKOLDu5MIyYoMBQZlsKJUSS3Xf5uwIoweikDYUSxQHSrYeEo0clR6sQf64PeheYoWQzahCv56P397jKiZUWcGMUqRZyFW30o9+jheoqNdxqo/ojTVCLLs3DG6uq15Zuq7Zt2+4BjNyS0yyt0qFHCGy8nkHnp7DWuBEwriz8EP5YC5UMGRj8WAaIgdOgkI4A6F0sDIWQtxj8W5KEsysC6YBkQkeTE8dOmJCxETD01KWJdgFJnjqmJ8fHug/4Omj56YcPad115lIHLu+AycglDMfjDDQuC0BeULwG5c/G+v21vNasQgjxSOEJarILHGSGoSxZElgOFYqVi1K/w9Ve3ujJ6hYNeUXqXjEKHJkqcgwzKxKIIxaM4FB+EML9ZiUlPLvTwCbZu8CmmkAelsh2E8adOnqnOnv7Cy1qz/B0nA3k1hWBFZH1Y8BFGfpWzcPoqJ0BNhiCHWxHKIJ+FI8vmvt6zIzKY54MIZjVsSkEhvouw0Uo7UCjtEEkkrK2+DOy8sC6U48Q1QfEoHKxc/Ja3nXimLuJ8WnHC2yCwerXugBz0Af6Pdu6L7x/p/bKe2sjh8rfXYW0UKjRR4jogLx0BCRjdKB2FojD8WAssA36mDjpY9UXl4e+G9au3dZTphDAXa4I51zNkxHWrAQmcRLIm1uFmSSDGDNuhyGIQfvlSmMqB6ocAmHPaDkGcFEVkSWTSGf0o1y2HDRJHj7KpM9YpURbtQ/HIS8+/4Wk2r3/fn4mnfNrtaYxMIopc2kF7IAjpccnD1MBB1cnPT3uZud9959TDYhIvEfJzoUITEdUE20BNDVoXyEVEEuJVeDZRckHbvGvX4uWb5WHtQkfg+pRTRiyWh3RjH4l1iKyHj7qSx0eaueTjAKgnrAm0j06GDJRBPhThI9iUEKQLhWANSSeLgQi9Rt3LL7wRii7CqSrls6UXFEcdIgGkw/X1jfmpK9KZv8TRbqyHyEI4LvLai5u8r64UufnyFyo0EVFNoDyUj/KeNQvBthHrIELIhcFAnYWTO65bJ7JHR+FeB2WZyHwjXrYpa9nctdVbq7dbWMRBClzS4sf1HYopVHGgS5UdxLTBAjCEuuls6hNBnDxGOPwoiXS4l4pFAqqjfu++oswQzljkz33w4rzX3UIEAfnGYe9l9eW8CO+GoHgfEGaVcWU5SCNiIDpMgzBMwXycE+o25naHKxQqNFHiOqAgpg5GKmcPOquACIxMkQb/C1Nf7VcJ6NUAcPrkOSebXh6hPBQ76amYRgh73rZY5IcYPKM4TLssBmGkpR10GuHZOnWrGyU4OWx6wFqhdJGAEcz05H6T2K6G1SAOdyBQv9KjJJ5x20B5qoP6SePWCWthQj7KwC9LQRhtiOeYXshPXsogjR+UmWTCfLD941Jr6BW0+6gE/12hQw0PLiAzgvKxEJBivLkiAwoZY1tNnVMgvVAqdDRZ29dZgM6xl+LLH3cR9u462PmimfOKKIwu2oQVo6MQwrEWPqrMpT05bwYLYhRAObwPHYpcuHDRCdchhPmpk/IZqRBT5OiF3Tv2eRqIJWX7WsUUJahdvL++cRDvCi4nop6vKN1dK4t2EE4YyoYAPEMQphsRgraKICo7zjZW+jmKkNuBP6TvJ4UONZRIYCfB+YLWF+w6fEtpLrsQiELcBKYYC6OjdWsoFdPwg7yPFpSmma+ZEROOImkL9WI5ol6IwfQTK32IwdSQ8+NVvShPJIKYsbBcboni+wlCPShgmm2dcRGtO1D8oX1HvcxWE6t1r2x2krKIRplSzBsrt3ZND44fO+lpENJL+crrU421SXFu6axslE98TCF1euIIU3nk16d7CPLmq1u9XvWHLEcQpG9ioUMNNTp3KEpgR+KWgy2puSFxjoEl8XOIYjUYyTCV62jca2grt/3cC9pWtRes1MGW2Ue71e/rjrIrgSCM8EizyNsgqDzq9/m8EGOGWwP8RgzDJx8d8nKIo7PdtY7mXUUaN/fW2blMwa2FtcEtS1KWlKCk5EnZ3M9uJSsUgWQomnpdyebPhPP0Vhf+CBdR6m8utBergt/LNauE9cio29f3bqFDDY9pQdZi3KPznRCsOWLEhuXAjxVhnoZA/t0kTS/E437w7sed3ULukAzCQyJB7brjOLz/mHc8ZKQtEANF+1lGIQjxIkrOK5LNsc4jjlFIp5F+5ZINHgewHshUtz5mTWwqwLKgaN4HN8puKhdoSkNZpEUJKKPX9jZDZbFg3GX95bsRK8eVWYggP21AdBFH0w5+hPbhdsgzMeJm27sozfZNH3p96meh0KFGCW+A+RiziMhaYBVwIQvkYOTqAxlEUjoRh28o+BEIRDoaeOL4qercmfP9Ojc/42/HyypMsbIhhYhBWJCiXhvk/TwdADlQnJt78hdyLJ+/rqSK4+zplp/tMmUSTxjtl0LI/0YxyQKjDkWiJFzmelyUoHfQ+4hUckVa/OGGhzLZ5vLV1NcNiSBej/lF5CBAWApEloVwrDj9xHP+HpOhugsdahCoyAydKyAcaqF0/LhYjgmPW5g9QwBGMpYDU85uhnR0riyOK9Q62LeF5odIk8zCsP8+tJ95u38DwmTX4SgFxUtonwjSIUqxHphQdboQU0L9OR/hrohw0RahlOkmnE43V9tZrIfIgdAsydqX3vHDMMrnKy2kwNKseSm28oLeRa+E8kUQSUbE1YGffXrCdhl7/ZIShHBlGxGoF2XTXuqV8r2tkKRYDwlW5HCX7WyhQ43coOw/c+qcK9unFVNurCsWVSMGP+dEYSRpUaqdS/4MP9YWsLgTh5UvrSUccvgi0sJ8d4KY0tmZDAQWfpxbQEbaE9ahlpootoi0NBmQhHDIQL0ixqkTZxoKgBAqA4lRGWTgebb5IUnup6Wz13pbeAfSY40gB1Nor77NCscbkhIYmulrEU6fPOvXFWRFGAwQpTP1mKsph3BcrUV2bNnTr/xChyaIjBFaVy4/SoAgIx+cVU30dUUQhLmeqYRnFO1Kt05nypHF4GCMtChKi1WffowcpOM5yrJ4y8+L6Mp7N8hqkI+1hawH5fkUYK5PE6b0Da+966MScB0u2hTnJbQVRbcVRBzkkGj7iQs58DMKOeZW/4QlijpREPE8C6mKLwU6WLV0Y3X0yImij2xRmhZE7wZiixqLUYhL/ZrOghBGmPJMWqaoNgoVmmh2UP832Werdgji1sOVbNOLKZhpwxXvBAiLIFI4MWxRym6COKwJcZAMUvhi1RQpwmA5mIoogx/OCLk5rOAhB2lJ1yGGKdzDTdx6WBwdIBzadywpMJQIMQTqQM6ePtcghpMCslgen4IsjPIhSeTrs7pjgQoh6HyRQ+3O7RfIx0EfVsVHdxKUS7z0UJdTF5S8HaxY9JYrnrWEt8eEZ1xZClkOrFwbhQpNlLieoCE0jHsFWpCi4CCF1h7xOV7EIBwCoCT8kAQ/QnxsgwuZKGfEosbU8vlnp1Ld7q3O21YYRUHQWLM0rxG6xfCpgIXpUj8rAHQ2RAglM6JCwW1Qj0iDlaAdkMOtgbluMayjUT79cdKmIkjgYuHUCTleXfxWp81yAZbGTbwJJPBDsEImyEcY5yY1KWqr0Q05/OAnn3p+2qLzi7zgJFx+RHUIhQpNlLgOcp5ujSKMK35MJ2FFakviirZnrT9EhGfLzoTpRXGkJ39YjiAUlkWjP0PtYPGFghHqZArxG2KmlPgAF9YExa99ebPnWTBtlZNIpCCddiTt91v78jveVvL7FGX1iBT+bOEodMXC9dUL014NoqTFKenZdnYDhBARaA+K5OidcnUETxnsqmiXpvc2CMvh+L84d8HLc3JYGZo6IAf1ylogL5ZrCpSv/IUKTXisoc2i1mMDOW7H1j3Vq0s2uKJEDCk+SBH3ONxSlLUFFkdEYffi5CC/TQuEo2hepg1OMGUtUILy4adO6sLvRDEXyAJQl6YS3Vpvj8hTJ856espnQevTh+VBVCcKZHWPEniWxZCcsSmpDepAQcRDev+YZvVQLmHTCLPyIBm/ThNy2+Sv3brtnBA70Wgr72vtggQiBYKfsO1v7/J8Ten7q0KHGlQg9ggkzi7oFgbIL8i/YtF670ARAtF6QuRgpGMh8E+CTEYKJxaWh3WDKaJdFyANnUs+EQElel2WB0LKcny4c7+Pfle2pZHVOHzgmLeV99a7a0FHPOmdGPidTPFtJqYWDsA4Oq+3s4x48kCSurxm49ev3hbWhTKsbyhboxylUSZ+TjBP2jQldOuDDOJZR1AmC3gnv/m9XHuGDG71CLN6VB5u0t2/FjrU0AvkBmS/o/1coIKjEvf2w+739nkn05ESRrkvQo0YKNctiI1+BIV6GiNS7mTVAfvdUjgBYi0gAvKM4Pe1hsXxTFoUR6dh2dTWuv0lwLB7xyeelrza5XhelGlC2cThp8OxYLIWiNoKUrFeB4piKnOSWX5MPuXz7CMe5RWibNsYI3sg8AWVm+DKT9vCosU6hvbIakAQvutQpsqtdd/3UKFDDY8x5M5poxFl/jOnv/D1gT9aZLes7TBO8yCBkyKfmtozfpTXIYW5pAW5HPy8DB2BkJ+TVRECKyPCuGUxAuGHJJRHHhZ4UVZNtgwWrSgLgdB+cGadramF8pwUnGvgGjmwAvj5EwaAsjNBBAhGOsqGFAhtU/t9WjKJ0W7KNaUyCLi+SJhIo5tl+jKLn7IVT/s8vuSBGHxME2iXSAGsvSsKHWqUOEd+kZOfnzFTvM8vzHD3gpGmbaeLKUBkwml3gpDDSY/iUL52NiKDE6KQRNbj/BcXupZLHCRgCiI9nQqZ1MHEkYYpKYgSUw+CIgSVrfcQWJNo6iN9rC+MdFYHne6j3MIghZTN6ORKIhApsjjMjemk3Ea3MsgvEqBo/9xv9UvJUq6TplgA6ledxPHOuIRRhsIR2svvTfI7Jq/D4s4WOtQoESVBCEob8/BcN/c+Kk04u3By2MhjxCMDQWVl0GEQobMILa4IEh/kwopQH7/TbIMy+dSPkmQ5SEtnOkFMoX7gZeUSB0GCMKFcblKpXbgs3HDzCOJX73Q++WgXyuPd6WQsB89OCCyFCXWgFKBymuQwC1LqwS8yyHKg9LAecWbiCrVpDJcwFE0dCoesToKifN3iQnI48s4bO71etYv6Q/yxg0KHGiJFhsiAhRjxq+fcz+4hflQ0z0gRhBFyEd3Ky53OPMuagPwoj47XGgG/wpFcVrOOOAnlWw2k0OjzkW0EgVxBEtsSG5FFGtKtt0WgyhDUWeF3xxWCkI+B4lbC8sti+CLP3TpcaJcl5PdZvWxjWABTKnWIGLIMKBVX00tYilgUZ8UjkDNbF+STjw4XctZEqMnhTgOFDjVKeANYBX4YNGbo3GqcdT6uE8XCcTWd5B/HgPzioN1BuFgFFKbpCDLIbBOOi7JRqJCJJdBBWjdQFiMK0ZQShLNpxOJ5dmIYcY4cPN4oL7ctg3mc9DL3vsYwEtBmSKA68DsxTGmgV3n5Wf1CO7BOIki2HiIH9aL0hoWwNPIz0OTn+J/pF7TrB4S1dSQUOtQo4Q1gKUbbVELHj3poTpDCwvTzARGDxveqSME5mh8HjS1fXceZ5ckWAn+QI1yOeYG2kfmlcPHSaSKG1hMKo624COVRD8oUKXDr8tzpPAN2BZQnUkEKX2NgIcozB164kINffJF9oP6Idkfb2+n4OeSZU2f98C0U3rQALsUqcJN/3Yotfm2PsxfQLk/PObidJqPQoYkS1wEVjhoyx4khK6Frfcjw+2cWcsS3kHNn4sdFvXD86ElfFUMuOhtR2RBCkgnCSzRHdvvF6zuh5KFM2kR7cEUYJ0SZSjIxBMrp2l8WhrVA8ZpSnAzFFSEktK9dVtdyDQqv3TphjuufLlyh/S4ZSksarhVwuw7kMrQuAoUKTRDRrpQ1hZSHsLagk/Gz8MQf5Ih7GbqLIWWQ359NYUxH8X2Eyz7zSto4IZVSGY0QAmFrm78gCrQxFBCN5ZsKZHMSWBlMQUwnshRYERECYfua0X7nNtgmigSQo0OIJHwD2bj2vU5Zvcpsh+f3yHH4FY5Sm4NDbnhi4RyEBFwlyKAPkbM2cLnCuMkWorwT/fTAtWOr+34xunroxgmetlChCQqWCMxVKBAROZwYpgiUjh/BkvhhlcX72oCwR+Pzu+9eLE5lcMFn1EOzO3c4RptVCmIUglieXe9+0miHQBid1I6DSOQTGbqJiIGZVv6BRpvA0fll63wpiLzaxUhAW8FyhfycFQkoD+QwlKl0iI7Zscw8Y4E53OKnj1hi+pkp/4l7plWP3DqpeuC6ca70+64ZXd1/zRiXu3860mcBfvD89rod1fLn13ka7S4LFZrIjQJqFNtF5moRAxnxQL1LkcJlNWQt2L2EyyJyoVUeROHcgZFNHuLdUpRn4vMvt4DaJaXoOfs5zaMeCILph2AiBHMx1/HoRG5BdVNCN0R9TQUCPddueGrXnc4CkOmIOG6LKQ1IXk/L+oSLN4xm2k3fjnhgVjXszqnVkJsnVrd+/ylX4r0/HxWK/uWY6uFBz/qAghz8qp3LVblc/Jo+Ou0xKA1bflkUUKjQBBH5JZsV9PmNLBSPArEK/L6ExSnKRfExbcTUwm6CdDFdxNSSBQsisx/EqI++M9pkUJqcVnFqMyKlRrg7VwR1UM7T9PcnCr9LAfwmRnGY851b91brV23zD2JsnZ+2Lf9T982oBl8/rutoRtEMOM4n1q/eXh2wAUl51Hn+C27eR1tURzcoTu/+ZWiXV6jQRLdOz6Cyk8dPO5uZBlD8qCGznRga/fKjfPwiAgTIYZwJMB1Fw6TQqFeu2tE/vPe6I6PXM9NCG/nuJ1Da0zYCATe4uV3NaOanB7T/mcGzqyfunuaj9lem1Iai7XnwDeO9L1h/bH7z/c6JaBsiVpA53gWoDbjtd+mGnM/T868TVvmN/Qvl9z9b1n/gbjPPABZDUMKBQBoWXO9t/ih2Gma+RQ4RgO3Wq4s3VFs37KoO7jtq83XMmxndiNgOq0dyHY63/Sw3C/cUgBTALa29tmVet3KLK5o5F+vHLuux26dUd/3kmY6S7/zRiI6in7xnui80+Rug/GouEwwTnpH/bLMQ7enfr/m5V1/oPffsOlC9Xu6YCLRFIJ1OirloTTaEMvh7G7wD4PpgxDXrK1RogggV0m5guwDQCZPTJQ1oB+u5PXJ75Wc0M0/y0a4Nyjh6+Lhfbl2zfFPFD2qeGTyrGvngbO+EobdMstEcK28UzeILJSNMffwVuy1vfeB/GrHbHNz+uxiE10I/aYEYGYqTnkuAQT9pyH3LlMNimPVRlBN5WBdxcBjPkTYTRGEg9yPh4+29BB0+Kj07OPqn/TFNKFRoosR1Kgd4o8Ept6H9LPjCrntUA2TnRRlpnb21PTO6+dPLbKm4qcVXzSfvne7zMyvth26aEEouinbTbUpmpLOV5G9pcntKStZCs7OiT+uANvROWLUMKZLoLBFW9w1X64DiBD3zR1tAtib6wzKkyfk4cc5QXH89FE9C/pONW9a/73mUDqtNnSzQu6FQoQki2hW3Uf/Rchst/UZ88Rg0Z+//+FPfDaAwFmEThi2oHr9ziil7hiuaFbYUnRdheUvFhRqgqUBQfbi1v+6ENq6kUxXGRd12WVxQ5gsz7SdccSsXxf3OGNERrjiBsh69bXJXC0Q/PGX9IYtA2P1G+G4gjl/l4ZI+k1Yu8qtrx1aP3j65X7i2ugj6kx8BhQpNRFRVLZm9xv+oqBILjCS2VHyp4xfqjFBtqR6/Y4ofkqDYQd8Z1lmE3fLdJ21xNtG3jxxvs1I/dfKsl42itdrudaR7pSBfWzG5qLxgVTgu6yBOeHO9eIfaglJ/4kGiPoGwGfztLfqEuV1pgVyQy9ePi4VMiFD2Zf9sMPKh2dWDN45vlANY04HIE5HKL/CbE4Ey6edukIWGtPzB2UKFJlSJRvDg68d3THYezfeZyzU2tlTd/orN2TP1OUT+U4ht1C8lqZ8z2s/ReXWn8FKa6wFtBjyH+GNjVyCi+HFwiVc6sGrJBl+nKAyXsrglz4DI0MIzpxUiX/gZxSzQOZrO4OyF+7Kg3eYMwuszmPij+G0Qrp0UaK4/+nyNsf3t3dXyeev8oHHQd57w/rrzxyOMsNu6EwNQwMM3T/S9dhTmTk+043u91EAgPYoGdHwbOV5+LA+31MHQW551V2ThRbXQI31I/OcwIFsPLB0gTUbc0u7zr7ACz4A1TP6LxigLy3PHj54uIU20yx4IX5ZW6xMR5GMb7VggbmcNv29GDOQiN/23WW5zn7bd1vO2KH/9lc3VAZva29i354iv0UChQX/066ASILeNHCw/Z/L8nvPDnbWSyV+XFc/MrXw6Vj7CMKHhr0Wo08XvM5hD+boYdxjrhHRGhsp5aX78kbQMrE0b7FJUHlYxCOePHp7PPAhnYdueqpR+IOQ0TKuY/522u+JnCZz7MI1kRSMMWOJ4/60bPki/vek9IPktTo7rllbPhQb9oQQ54573D1Qvmum5dKm5cGKHwFaRX4/VI7rPTWb4YxR34hodbKPVFnGdv9VtIG8eiSBeopmPZ85F3jBS8Ak6jpoVF8SAnNxLUBh46p4ZfuWNUaewNnI4/m7/Z0l7ASm0F+P79hz2cx5+0zJy8Gw311Iw5yO4T9w93QcHo/nj3Yc6fQV6HbpliLSKqt3wdNxULlAe+gL9ajAUGvRHKcczCXx4ys+qbNvG3e7e87NRDWKMHjK341fDwbmz9TkEYexU6EwRjrQoIhZ5dYX1y9dhKIft4WdH45dmispKU1jK5mXk54HAlldp+X6z24jGYR3Txr2/iN3U7T8YXt3xw6fdzw6LxTg3seno/F1GqPvJJPUZyNtYgtr/80EvqI24fFjjDgkL5AmPPV/d9O3H/exGhOTwjnbm3SCiwVxo0B8ea1Bl4OSJM9WQmyf0uw6nH8WwSAPqhEWtVTvpkW5fTOkoGpU77CNjcLuTcnw+ZTxfTjXb5X4ZOPjhmJqDJL7u5k5CUDxTHYOC3RQXooMopR2lPQJTCe+vcxJZD7VbyBZIJ7LdQBmUx9U8/n8WLJ3OcKTo24yUuAxMtbstEIB4rNXPv/qQu7d9f3h17dcfcULzLEsGCg36IxpVXt7c4nU/u5P8zLHq6VNnfeFCuOIAR8wcUik8d2TurCvZpubOFHIZWAl2R/53KmyXwfY4d446kk/SjCS+tHIWkME8fCWQwmkuiqUd7ALiPemvaFe31+HG/Q7bar6y4E3/ZPDgDeN9O3/Pz0Y2lMsz7s3/M8zaHiM8wkeZUuML663fC3fQd5/w9LJaWa77r0fcxar98j+HlrBHrTzVM8r75q4fxycAUGjQHx5boJdj9PIiuVOkGM2DhA3UMXk72Qtsv0iiLRV/x5yFFhaFhme52zqDsxEOl/xzc/pJYN2GOBPgURZIdWQTz3P9blc+1XCmw2km5x2P2e6GdoWSa9ONoMR7zUU8zBQjsqJ8FH+bpdHWEcXhz2sSRJ/db7bdBnVSxiAjFmTh6zZEIx6SkP/2Hw6vbvjWYx3S3FXKo33Ed74JFQGFBv3hsYasRI0mdXIvRKc2E7AI3G/bIfbIfJVtb6kQGknHsqV6c9W2zpYqj+J2ue262iZb8SJAe2pqg7MXv/RiRONcgS0wCtBoZeS2RyYKRCmYZoVJZAEUJyWjXI16Keq6bzzqLnXxh+UyIZjucDnmpm7aQf6ttoYhHOWKUPzUA/f6Uh7haj8u7cdC8YyInFgMyAsKDfrDYw3D7prq5xkolk71jsZs2paKEcqWikUYp50yTXqhwdeN86+tbKnefedD/1QP2srLQFnUITLEc+TBBdoSqpxeuwPAApbTSNY7fDVVZ9BBbbPbHuGkYf5Wx0lu/p9QwB22o0DBv/yPodX1ZppJxz2KRTNfc0XeWkYx9bBl5/e5KJB6cLUApKy7PXyUDZiZbgX5UurhpW4OFflLv/xdEE0f91hePvppmqG8W7/3pP/tUCwQadxKpemJ9/GFaKqf98ltAYUG/UEkix0ViLDoYUvFn4eOLVVtOXDzjSuU1v6mUU83kUl5BT3naSmD8thSrV72tn/2fvyOqZ2Xub0xgnlZG+XpWXESDqHcLfl+/C+DfQ4WqW800/uLfx/ieVlDsRNh7YJSSYPCsCwqS3XgYmkYfaS7pYxiysBFpNibvj2sM69L+N+YcS9evNwJY8SzMIY0/M0sheGyAEexsgC8A9Maz9QPcUUunrFcg74TadVm3glS6hkUGvQHysFCPPPArM5hE9DXSpnkbJqFIIktyNL83Q38LpQRwN9o4KupH7Nbw9pC58kk8+K8gFy9tCvCRjDPN9qIIExKJ470KgOhk86fv+Ako2MgEqOGcKYdSKX8TIEqh3h1LN9RSOPEKGVTP+GevoxCTRkokN0PShtURrS/g6UTsbnphcsOiCmGeN6HfITz8RJiYSV45tYbrixEns5oG++NZVMYQrtws4WkfvoHF/0VGvQHissjttcoBwrbZ1sq/gIuWyrWCryUN8RekJdXY3REqxGtOL3sLWYOyctLwfjry6oapfBSjJbrvvGIl0U8Hcd/e8XenV0GyqGOn/7bg9WnB497XqYzXART6sq3OhihXpd1CApDyfzxN6VFWBexk2AhLCIiYRlCeUyjtJdwH30ljUa2hEWvykDBsh4I/UD93B0hnHdUXBaIltsh0ZSiQ7NmXJ2eu6Ps2rCA7OLaB2ig0KA/iEThSF7pSvRCMskSOuIeawQNFCOV5oZvPtZJp4aiDNKjSP7iC5dsfKVtnaQFFtfiOAKmbIihDmMkUCZ1McJUNkqmPBaNrC9Y//ClmPao0zSHs37iqzBlUw5zMBdxNaoQ/goeLqOSMtz6WJu5QYUSGbVsF+OdYzDQP7QdMqschPfGukAoyrj9B83+QzQtIKTPVoA6cHlHhbPYZF3BXzts/xrw14EtDQ6bAVhgckehQXeQGGLoNwdZ1JEsunjGj9BgnhmVmLItb73vJ3/XfO3h0lnD3SSzPtFidZCZWOXnS18mG/VwfsHaQp2O66QxBXFAg8tJ48rFG7xjpHy2aYttIcg2lyNp1cFUgFJJw6IOEmi0882Eq3D4b/tBkB9Sskvgb3jSHsLaCkc0hUFKtbWb6P1YnMZzWEKPv8Ys0cilvibhKH+gv1z4ZTAFbzYZY/J9k78tav3tUcr3MwQazRx5zdeGuB+FqHMYAXS45mQpjT+ZwLOmDkY30wRfMnkeclN9ACXTy//aw0hj382ousXIxPcFtYGpg1HL4tDXHjai6FTKoj03fuvxznyLsrm9jv+un4xwwuBqRHJDHaKKMIRJKLfjt/fjQEhWsm2q23mzcH2O70D0BVPUbwpbzJ8w5S43ud/kny3oL4uafv+IJlV+FxFFM7LpHK0JEJQgK4HQ6SgPPxdWiKdTtABDcXzw4jclrKhFJoRtHumwLihe4XwuxuULKqYVa8QzbcLVCMR6UZ+3MSlWQt2a3iQoHWKhXFkNWTIE4qgspiS25q8sWF/t2Lynypdg2jDlFV93WPxOk8kmPzf5+9Llfxwo7+CLLkY0IxIl5BGJq87WiFIcdwTwc2BF50uhTC1sBSFcTs+FWC7zcmMb84qyIKFGqM/JhUiQVHmzuKKxJMWUq20a1SIBfq7Rsa7hHgNfQH9dSPem2PMmq0yGmnzV5K9LF/5pIl668qteWhvQ0ShLitEWDuVpRPKMYlAAf5WXm8goJFsW4kWsbqObuKxESbe01MkN8KcfeM6vBWzfuLv6/FjcTxgIvQa1KXavObPMvdHcfzD5s9IlVwHoJEFKYL3A/J8VAxH0cQaC8IzfSWSKvPbrEae0KBxC6Rm3rfCBtlRfYqX7wRT8pslTJt80+Zvyelfxm6L0q8OngrKIxJ+VCAEY2Xm90Ba2VGz7rmRLheK7Kd+UinS2VBb0jyZ/Xpp7Fb8vuDYKskl/xPbu/B6BLRU3o7t9Dr/SUW0K/r/ZUl3Fb4GvfOV/AYcs19yiMFmJAAAAAElFTkSuQmCC"
                            width="134" height="74" alt="">
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
        <span style="font-family:'Arial Narrow'">&#xa0;</span>
    </p>
    <div style="clear:both">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal">
            &#xa0;
        </p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:normal; font-size:7pt">
            <span style="font-family:'Avenir LT Std 35 Light'; letter-spacing:3pt; color:#808080">Page</span><span
                style="font-family:'Avenir LT Std 35 Light'"> | </span><strong><span
                    style="font-family:'Avenir LT Std 35 Light'; ">1</span></strong>
        </p>
    </div>
</div>
</body>
</html>
