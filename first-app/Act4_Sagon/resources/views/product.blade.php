<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        /* Header styling */
        h1 {
            text-align: center;
            color: #6a0dad; /* Violet color */
            margin-top: 20px;
        }

        /* Table container */
        .table-container {
            width: 90%;
            margin: 20px auto;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Table header styling */
        th {
            background-color: #6a0dad;
            color: white;
            padding: 12px;
            text-align: left;
        }

        /* Table data row styling */
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Alternate row color */
        tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        /* Hover effect for rows */
        tr:hover {
            background-color: #e1bee7;
        }

        /* Table footer styling */
        tfoot td {
            background-color: #f3f3f3;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
            <tr><td>Product 1</td><td>$10.00</td><td>100</td></tr>
            <tr><td>Product 2</td><td>$15.00</td><td>200</td></tr>
            <tr><td>Product 3</td><td>$20.00</td><td>150</td></tr>
            <tr><td>Product 4</td><td>$25.00</td><td>120</td></tr>
            <tr><td>Product 5</td><td>$30.00</td><td>80</td></tr>
            <tr><td>Product 6</td><td>$35.00</td><td>95</td></tr>
            <tr><td>Product 7</td><td>$40.00</td><td>60</td></tr>
            <tr><td>Product 8</td><td>$45.00</td><td>75</td></tr>
            <tr><td>Product 9</td><td>$50.00</td><td>90</td></tr>
            <tr><td>Product 10</td><td>$55.00</td><td>50</td></tr>
            <tr><td>Product 11</td><td>$60.00</td><td>120</td></tr>
            <tr><td>Product 12</td><td>$65.00</td><td>130</td></tr>
            <tr><td>Product 13</td><td>$70.00</td><td>110</td></tr>
            <tr><td>Product 14</td><td>$75.00</td><td>140</td></tr>
            <tr><td>Product 15</td><td>$80.00</td><td>160</td></tr>
            <tr><td>Product 16</td><td>$85.00</td><td>170</td></tr>
            <tr><td>Product 17</td><td>$90.00</td><td>180</td></tr>
            <tr><td>Product 18</td><td>$95.00</td><td>190</td></tr>
            <tr><td>Product 19</td><td>$100.00</td><td>200</td></tr>
            <tr><td>Product 20</td><td>$105.00</td><td>210</td></tr>
            <tr><td>Product 21</td><td>$110.00</td><td>220</td></tr>
            <tr><td>Product 22</td><td>$115.00</td><td>230</td></tr>
            <tr><td>Product 23</td><td>$120.00</td><td>240</td></tr>
            <tr><td>Product 24</td><td>$125.00</td><td>250</td></tr>
            <tr><td>Product 25</td><td>$130.00</td><td>260</td></tr>
            <tr><td>Product 26</td><td>$135.00</td><td>270</td></tr>
            <tr><td>Product 27</td><td>$140.00</td><td>280</td></tr>
            <tr><td>Product 28</td><td>$145.00</td><td>290</td></tr>
            <tr><td>Product 29</td><td>$150.00</td><td>300</td></tr>
            <tr><td>Product 30</td><td>$155.00</td><td>310</td></tr>
            <tr><td>Product 31</td><td>$160.00</td><td>320</td></tr>
            <tr><td>Product 32</td><td>$165.00</td><td>330</td></tr>
            <tr><td>Product 33</td><td>$170.00</td><td>340</td></tr>
            <tr><td>Product 34</td><td>$175.00</td><td>350</td></tr>
            <tr><td>Product 35</td><td>$180.00</td><td>360</td></tr>
            <tr><td>Product 36</td><td>$185.00</td><td>370</td></tr>
            <tr><td>Product 37</td><td>$190.00</td><td>380</td></tr>
            <tr><td>Product 38</td><td>$195.00</td><td>390</td></tr>
            <tr><td>Product 39</td><td>$200.00</td><td>400</td></tr>
            <tr><td>Product 40</td><td>$205.00</td><td>410</td></tr>
            <tr><td>Product 41</td><td>$210.00</td><td>420</td></tr>
            <tr><td>Product 42</td><td>$215.00</td><td>430</td></tr>
            <tr><td>Product 43</td><td>$220.00</td><td>440</td></tr>
            <tr><td>Product 44</td><td>$225.00</td><td>450</td></tr>
            <tr><td>Product 45</td><td>$230.00</td><td>460</td></tr>
            <tr><td>Product 46</td><td>$235.00</td><td>470</td></tr>
            <tr><td>Product 47</td><td>$240.00</td><td>480</td></tr>
            <tr><td>Product 48</td><td>$245.00</td><td>490</td></tr>
            <tr><td>Product 49</td><td>$250.00</td><td>500</td></tr>
            <tr><td>Product 50</td><td>$255.00</td><td>510</td></tr>
            <tr><td>Product 51</td><td>$260.00</td><td>520</td></tr>
            <tr><td>Product 52</td><td>$265.00</td><td>530</td></tr>
            <tr><td>Product 53</td><td>$270.00</td><td>540</td></tr>
            <tr><td>Product 54</td><td>$275.00</td><td>550</td></tr>
            <tr><td>Product 55</td><td>$280.00</td><td>560</td></tr>
            <tr><td>Product 56</td><td>$285.00</td><td>570</td></tr>
            <tr><td>Product 57</td><td>$290.00</td><td>580</td></tr>
            <tr><td>Product 58</td><td>$295.00</td><td>590</td></tr>
            <tr><td>Product 59</td><td>$300.00</td><td>600</td></tr>
            <tr><td>Product 60</td><td>$305.00</td><td>610</td></tr>
            <tr><td>Product 61</td><td>$310.00</td><td>620</td></tr>
            <tr><td>Product 62</td><td>$315.00</td><td>630</td></tr>
            <tr><td>Product 63</td><td>$320.00</td><td>640</td></tr>
            <tr><td>Product 64</td><td>$325.00</td><td>650</td></tr>
            <tr><td>Product 65</td><td>$330.00</td><td>660</td></tr>
            <tr><td>Product 66</td><td>$335.00</td><td>670</td></tr>
            <tr><td>Product 67</td><td>$340.00</td><td>680</td></tr>
            <tr><td>Product 68</td><td>$345.00</td><td>690</td></tr>
            <tr><td>Product 69</td><td>$350.00</td><td>700</td></tr>
            <tr><td>Product 70</td><td>$355.00</td><td>710</td></tr>
            <tr><td>Product 71</td><td>$360.00</td><td>720</td></tr>
            <tr><td>Product 72</td><td>$365.00</td><td>730</td></tr>
            <tr><td>Product 73</td><td>$370.00</td><td>740</td></tr>
            <tr><td>Product 74</td><td>$375.00</td><td>750</td></tr>
            <tr><td>Product 75</td><td>$380.00</td><td>760</td></tr>
            <tr><td>Product 76</td><td>$385.00</td><td>770</td></tr>
            <tr><td>Product 77</td><td>$390.00</td><td>780</td></tr>
            <tr><td>Product 78</td><td>$395.00</td><td>790</td></tr>
            <tr><td>Product 79</td><td>$400.00</td><td>800</td></tr>
            <tr><td>Product 80</td><td>$405.00</td><td>810</td></tr>
            <tr><td>Product 81</td><td>$410.00</td><td>820</td></tr>
            <tr><td>Product 82</td><td>$415.00</td><td>830</td></tr>
            <tr><td>Product 83</td><td>$420.00</td><td>840</td></tr>
            <tr><td>Product 84</td><td>$425.00</td><td>850</td></tr>
            <tr><td>Product 85</td><td>$430.00</td><td>860</td></tr>
            <tr><td>Product 86</td><td>$435.00</td><td>870</td></tr>
            <tr><td>Product 87</td><td>$440.00</td><td>880</td></tr>
            <tr><td>Product 88</td><td>$445.00</td><td>890</td></tr>
            <tr><td>Product 89</td><td>$450.00</td><td>900</td></tr>
            <tr><td>Product 90</td><td>$455.00</td><td>910</td></tr>
            <tr><td>Product 91</td><td>$460.00</td><td>920</td></tr>
            <tr><td>Product 92</td><td>$465.00</td><td>930</td></tr>
            <tr><td>Product 93</td><td>$470.00</td><td>940</td></tr>
            <tr><td>Product 94</td><td>$475.00</td><td>950</td></tr>
            <tr><td>Product 95</td><td>$480.00</td><td>960</td></tr>
            <tr><td>Product 96</td><td>$485.00</td><td>970</td></tr>
            <tr><td>Product 97</td><td>$490.00</td><td>980</td></tr>
            <tr><td>Product 98</td><td>$495.00</td><td>990</td></tr>
            <tr><td>Product 99</td><td>$500.00</td><td>1000</td></tr>
            <tr><td>Product 100</td><td>$505.00</td><td>1010</td></tr>
            <tr><td>Product 101</td><td>$510.00</td><td>1020</td></tr>
            <tr><td>Product 102</td><td>$515.00</td><td>1030</td></tr>
            <tr><td>Product 103</td><td>$520.00</td><td>1040</td></tr>
            <tr><td>Product 104</td><td>$525.00</td><td>1050</td></tr>
            <tr><td>Product 105</td><td>$530.00</td><td>1060</td></tr>
            <tr><td>Product 106</td><td>$535.00</td><td>1070</td></tr>
            <tr><td>Product 107</td><td>$540.00</td><td>1080</td></tr>
            <tr><td>Product 108</td><td>$545.00</td><td>1090</td></tr>
            <tr><td>Product 109</td><td>$550.00</td><td>1100</td></tr>
            <tr><td>Product 110</td><td>$555.00</td><td>1110</td></tr>
            <tr><td>Product 111</td><td>$560.00</td><td>1120</td></tr>
            <tr><td>Product 112</td><td>$565.00</td><td>1130</td></tr>
            <tr><td>Product 113</td><td>$570.00</td><td>1140</td></tr>
            <tr><td>Product 114</td><td>$575.00</td><td>1150</td></tr>
            <tr><td>Product 115</td><td>$580.00</td><td>1160</td></tr>
            <tr><td>Product 116</td><td>$585.00</td><td>1170</td></tr>
            <tr><td>Product 117</td><td>$590.00</td><td>1180</td></tr>
            <tr><td>Product 118</td><td>$595.00</td><td>1190</td></tr>
            <tr><td>Product 119</td><td>$600.00</td><td>1200</td></tr>
            <tr><td>Product 120</td><td>$605.00</td><td>1210</td></tr>
            <tr><td>Product 121</td><td>$610.00</td><td>1220</td></tr>
            <tr><td>Product 122</td><td>$615.00</td><td>1230</td></tr>
            <tr><td>Product 123</td><td>$620.00</td><td>1240</td></tr>
            <tr><td>Product 124</td><td>$625.00</td><td>1250</td></tr>
            <tr><td>Product 125</td><td>$630.00</td><td>1260</td></tr>
            <tr><td>Product 126</td><td>$635.00</td><td>1270</td></tr>
            <tr><td>Product 127</td><td>$640.00</td><td>1280</td></tr>
            <tr><td>Product 128</td><td>$645.00</td><td>1290</td></tr>
            <tr><td>Product 129</td><td>$650.00</td><td>1300</td></tr>
            <tr><td>Product 130</td><td>$655.00</td><td>1310</td></tr>
            <tr><td>Product 131</td><td>$660.00</td><td>1320</td></tr>
            <tr><td>Product 132</td><td>$665.00</td><td>1330</td></tr>
            <tr><td>Product 133</td><td>$670.00</td><td>1340</td></tr>
            <tr><td>Product 134</td><td>$675.00</td><td>1350</td></tr>
            <tr><td>Product 135</td><td>$680.00</td><td>1360</td></tr>
            <tr><td>Product 136</td><td>$685.00</td><td>1370</td></tr>
            <tr><td>Product 137</td><td>$690.00</td><td>1380</td></tr>
            <tr><td>Product 138</td><td>$695.00</td><td>1390</td></tr>
            <tr><td>Product 139</td><td>$700.00</td><td>1400</td></tr>
            <tr><td>Product 140</td><td>$705.00</td><td>1410</td></tr>
            <tr><td>Product 141</td><td>$710.00</td><td>1420</td></tr>
            <tr><td>Product 142</td><td>$715.00</td><td>1430</td></tr>
            <tr><td>Product 143</td><td>$720.00</td><td>1440</td></tr>
            <tr><td>Product 144</td><td>$725.00</td><td>1450</td></tr>
            <tr><td>Product 145</td><td>$730.00</td><td>1460</td></tr>
            <tr><td>Product 146</td><td>$735.00</td><td>1470</td></tr>
            <tr><td>Product 147</td><td>$740.00</td><td>1480</td></tr>
            <tr><td>Product 148</td><td>$745.00</td><td>1490</td></tr>
            <tr><td>Product 149</td><td>$750.00</td><td>1500</td></tr>
            <tr><td>Product 150</td><td>$755.00</td><td>1510</td></tr>
            </tbody>
        </table>
    </div>
</body>
</html>