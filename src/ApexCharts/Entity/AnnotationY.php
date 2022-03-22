<?php
declare(strict_types = 1);


namespace Toolkit\ApexCharts\Entity;


use Cake\Core\InstanceConfigTrait;
use Toolkit\Exception\ApexChartWrongOptionException;

class AnnotationY
{
    use InstanceConfigTrait;

    /**
     * Default config for annotation.
     *
     * @var array
     */
    protected array $_defaultConfig = [];

    /**
     * Value on which the annotation will be drawn
     *
     * @param float|int|string $y
     * @return $this
     */
    public function setY(float|int|string $y): self
    {
        $this->setConfig('y', $y);

        return $this;
    }

    /**
     * If you provide this additional y2 value, a region will be drawn from y to y2.
     *
     * @param float|int|string $y2
     * @return $this
     */
    public function setY2(float|int|string $y2): self
    {
        $this->setConfig('y2', $y2);

        return $this;
    }

    /**
     * Creates dashes in borders of the SVG path. A higher number creates more space between dashes in the border.
     *
     * @param int $strokeDashArray
     * @return $this
     */
    public function setStrokeDashArray(int $strokeDashArray): self
    {
        $this->setConfig('strokeDashArray', $strokeDashArray);

        return $this;
    }

    /**
     * Color of the annotation line.
     *
     * @param string $borderColor
     * @return $this
     */
    public function setBorderColor(string $borderColor): self
    {
        $this->setConfig('borderColor', $borderColor);

        return $this;
    }

    /**
     * Fill Color of the region.
     * Only applicable if y2 is provided.
     *
     * @param string $fillColor
     * @return $this
     */
    public function setFillColor(string $fillColor): self
    {
        $this->setConfig('fillColor', $fillColor);

        return $this;
    }

    /**
     * Opacity of the filled region.
     *
     * @param float $opacity
     * @return $this
     */
    public function setOpacity(float $opacity): self
    {
        $this->setConfig('opacity', $opacity);

        return $this;
    }

    /**
     * Sets the left offset for annotation line
     *
     * @param int $offsetX
     * @return $this
     */
    public function setOffsetX(int $offsetX): self
    {
        $this->setConfig('offsetX', $offsetX);

        return $this;
    }

    /**
     * Sets the top offset for annotation line
     *
     * @param int $offsetY
     * @return $this
     */
    public function setOffsetY(int $offsetY): self
    {
        $this->setConfig('offsetY', $offsetY);

        return $this;
    }

    /**
     * Sets the width for annotation line
     *
     * @param int|float|string $width
     * @return $this
     */
    public function setWidth(int|float|string $width): self
    {
        $this->setConfig('width', $width);

        return $this;
    }

    /**
     * When there are multiple y-axis, setting this options will put the annotation for that particular y-axis
     *
     * @param int $yAxisIndex
     * @return $this
     */
    public function setYAxisIndex(int $yAxisIndex): self
    {
        $this->setConfig('yAxisIndex', $yAxisIndex);

        return $this;
    }

    /**
     * Border Color of the label
     *
     * @param string $borderColor
     * @return $this
     */
    public function setLabelBorderCColor(string $borderColor): self
    {
        $this->setConfig('label.borderColor', $borderColor);

        return $this;
    }

    /**
     * Border width of the label
     *
     * @param int $borderWidth
     * @return $this
     */
    public function setLabelBorderWidth(int $borderWidth): self
    {
        $this->setConfig('label.borderWidth', $borderWidth);

        return $this;
    }

    /**
     * Border-radius of the label
     *
     * @param int $borderRadius
     * @return $this
     */
    public function setLabelBorderRadius(int $borderRadius): self
    {
        $this->setConfig('label.borderRadius', $borderRadius);

        return $this;
    }

    /**
     * Text for tha annotation label
     *
     * @param string $text
     * @return $this
     */
    public function setLabelText(string $text): self
    {
        $this->setConfig('label.text', $text);

        return $this;
    }

    /**
     * The alignment of text relative to label’s drawing position
     * Accepted values:
     *  - start
     *  - middle
     *  - end
     *
     * @param string $textAnchor
     * @return $this
     */
    public function setLabelTextAnchor(string $textAnchor): self
    {
        $valid = ['start', 'middle', 'end'];
        if (!in_array($textAnchor, $valid)) {
            throw new ApexChartWrongOptionException('textAnchor', $textAnchor, $valid);
        }
        $this->setConfig('label.textAnchor', $textAnchor);

        return $this;
    }

    /**
     * Available Options:
     *  - left
     *  - right
     *
     * @param string $position
     * @return $this
     */
    public function setLabelPosition(string $position): self
    {
        $valid = ['left', 'right'];
        if (!in_array($position, $valid)) {
            throw new ApexChartWrongOptionException('textAnchor', $position, $valid);
        }
        $this->setConfig('label.position', $position);

        return $this;
    }

    /**
     * Sets the left offset for annotation label
     *
     * @param int $offsetX
     * @return $this
     */
    public function setLabelOffsetX(int $offsetX): self
    {
        $this->setConfig('label.offsetX', $offsetX);

        return $this;
    }

    /**
     * Sets the top offset for annotation label
     *
     * @param int $offsetY
     * @return $this
     */
    public function setLabelOffsetY(int $offsetY): self
    {
        $this->setConfig('label.offsetY', $offsetY);

        return $this;
    }

    /**
     * Background Color for the annotation label
     *
     * @param string $background
     * @return $this
     */
    public function setLabelStyleBackground(string $background): self
    {
        $this->setConfig('label.style.background', $background);

        return $this;
    }

    /**
     * ForeColor for the annotation label
     *
     * @param string $color
     * @return $this
     */
    public function setLabelStyleColor(string $color): self
    {
        $this->setConfig('label.style.color', $color);

        return $this;
    }

    /**
     * FontSize for the annotation label
     *
     * @param string $fontSize
     * @return $this
     */
    public function setLabelStyleFontSize(string $fontSize): self
    {
        $this->setConfig('label.style.fontSize', $fontSize);

        return $this;
    }

    /**
     * Font-weight for the annotation label
     *
     * @param string|int $fontWeight
     * @return $this
     */
    public function setLabelStyleFontWeight(string|int $fontWeight): self
    {
        $this->setConfig('label.style.fontWeight', $fontWeight);

        return $this;
    }

    /**
     * Font-family for the annotation label
     *
     * @param string $fontFamily
     * @return $this
     */
    public function setLabelStyleFontFamily(string $fontFamily): self
    {
        $this->setConfig('label.style.fontFamily', $fontFamily);

        return $this;
    }

    /**
     * A custom Css Class to give to the annotation label elements
     *
     * @param string $cssClass
     * @return $this
     */
    public function setLabelStyleCssClass(string $cssClass): self
    {
        $this->setConfig('label.style.cssClass', $cssClass);

        return $this;
    }

    /**
     * Left padding for the label
     *
     * @param int $left
     * @return $this
     */
    public function setLabelStylePaddingLeft(int $left): self
    {
        $this->setConfig('label.style.padding.left', $left);

        return $this;
    }

    /**
     * Right padding for the label
     *
     * @param int $right
     * @return $this
     */
    public function setLabelStylePaddingRight(int $right): self
    {
        $this->setConfig('label.style.padding.right', $right);

        return $this;
    }

    /**
     * Top padding for the label
     *
     * @param int $top
     * @return $this
     */
    public function setLabelStylePaddingTop(int $top): self
    {
        $this->setConfig('label.style.padding.top', $top);

        return $this;
    }

    /**
     * Bottom padding for the label
     *
     * @param int $bottom
     * @return $this
     */
    public function setLabelStylePaddingBottom(int $bottom): self
    {
        $this->setConfig('label.style.padding.bottom', $bottom);

        return $this;
    }

    /**
     * Value on which the annotation will be drawn
     *
     * @param float|int|string $x
     * @return $this
     */
    public function setXaxisX(float|int|string $x): self
    {
        $this->setConfig('xaxis.x', $x);

        return $this;
    }

    /**
     * If you provide this additional x2 value, a region will be drawn from x to x2.
     *
     * @param float|int|string $x2
     * @return $this
     */
    public function setXaxisX2(float|int|string $x2): self
    {
        $this->setConfig('xaxis.x2', $x2);

        return $this;
    }

    /**
     * Creates dashes in borders of the SVG path. A higher number creates more space between dashes in the border.
     *
     * @param int $strokeDashArray
     * @return $this
     */
    public function setXaxisStrokeDashArray(int $strokeDashArray): self
    {
        $this->setConfig('xaxis.strokeDashArray', $strokeDashArray);

        return $this;
    }

    /**
     * Color of the annotation line.
     *
     * @param string $borderColor
     * @return $this
     */
    public function setXaxisBorderColor(string $borderColor): self
    {
        $this->setConfig('xaxis.borderColor', $borderColor);

        return $this;
    }

    /**
     * Fill Color of the region.
     * Only applicable if y2 is provided.
     *
     * @param string $fillColor
     * @return $this
     */
    public function setXaxisFillColor(string $fillColor): self
    {
        $this->setConfig('xaxis.fillColor', $fillColor);

        return $this;
    }

    /**
     * Opacity of the filled region.
     *
     * @param float $opacity
     * @return $this
     */
    public function setXaxisOpacity(float $opacity): self
    {
        $this->setConfig('xaxis.opacity', $opacity);

        return $this;
    }

    /**
     * Sets the left offset for annotation line
     *
     * @param int $offsetX
     * @return $this
     */
    public function setXaxisOffsetX(int $offsetX): self
    {
        $this->setConfig('xaxis.offsetX', $offsetX);

        return $this;
    }

    /**
     * Sets the top offset for annotation line
     *
     * @param int $offsetY
     * @return $this
     */
    public function setXaxisOffsetY(int $offsetY): self
    {
        $this->setConfig('xaxis.offsetY', $offsetY);

        return $this;
    }

    /**
     * Sets the width for annotation line
     *
     * @param int|float|string $width
     * @return $this
     */
    public function setXaxisWidth(int|float|string $width): self
    {
        $this->setConfig('xaxis.width', $width);

        return $this;
    }

    /**
     * When there are multiple y-axis, setting this options will put the annotation for that particular y-axis
     *
     * @param int $yAxisIndex
     * @return $this
     */
    public function setXaxisYAxisIndex(int $yAxisIndex): self
    {
        $this->setConfig('xaxis.yAxisIndex', $yAxisIndex);

        return $this;
    }

    /**
     * Border Color of the label
     *
     * @param string $borderColor
     * @return $this
     */
    public function setXaxisLabelBorderCColor(string $borderColor): self
    {
        $this->setConfig('xaxis.label.borderColor', $borderColor);

        return $this;
    }

    /**
     * Border width of the label
     *
     * @param int $borderWidth
     * @return $this
     */
    public function setXaxisLabelBorderWidth(int $borderWidth): self
    {
        $this->setConfig('xaxis.label.borderWidth', $borderWidth);

        return $this;
    }

    /**
     * Border-radius of the label
     *
     * @param int $borderRadius
     * @return $this
     */
    public function setXaxisLabelBorderRadius(int $borderRadius): self
    {
        $this->setConfig('xaxis.label.borderRadius', $borderRadius);

        return $this;
    }

    /**
     * Text for tha annotation label
     *
     * @param string $text
     * @return $this
     */
    public function setXaxisLabelText(string $text): self
    {
        $this->setConfig('xaxis.label.text', $text);

        return $this;
    }

    /**
     * The alignment of text relative to label’s drawing position
     * Accepted values:
     *  - start
     *  - middle
     *  - end
     *
     * @param string $textAnchor
     * @return $this
     */
    public function setXaxisLabelTextAnchor(string $textAnchor): self
    {
        $valid = ['start', 'middle', 'end'];
        if (!in_array($textAnchor, $valid)) {
            throw new ApexChartWrongOptionException('textAnchor', $textAnchor, $valid);
        }
        $this->setConfig('xaxis.label.textAnchor', $textAnchor);

        return $this;
    }

    /**
     * Available Options:
     *  - left
     *  - right
     *
     * @param string $position
     * @return $this
     */
    public function setXaxisLabelPosition(string $position): self
    {
        $valid = ['left', 'right'];
        if (!in_array($position, $valid)) {
            throw new ApexChartWrongOptionException('textAnchor', $position, $valid);
        }
        $this->setConfig('xaxis.label.position', $position);

        return $this;
    }

    /**
     * Sets the left offset for annotation label
     *
     * @param int $offsetX
     * @return $this
     */
    public function setXaxisLabelOffsetX(int $offsetX): self
    {
        $this->setConfig('xaxis.label.offsetX', $offsetX);

        return $this;
    }

    /**
     * Sets the top offset for annotation label
     *
     * @param int $offsetY
     * @return $this
     */
    public function setXaxisLabelOffsetY(int $offsetY): self
    {
        $this->setConfig('xaxis.label.offsetY', $offsetY);

        return $this;
    }

    /**
     * Background Color for the annotation label
     *
     * @param string $background
     * @return $this
     */
    public function setXaxisLabelStyleBackground(string $background): self
    {
        $this->setConfig('xaxis.label.style.background', $background);

        return $this;
    }

    /**
     * ForeColor for the annotation label
     *
     * @param string $color
     * @return $this
     */
    public function setXaxisLabelStyleColor(string $color): self
    {
        $this->setConfig('xaxis.label.style.color', $color);

        return $this;
    }

    /**
     * FontSize for the annotation label
     *
     * @param string $fontSize
     * @return $this
     */
    public function setXaxisLabelStyleFontSize(string $fontSize): self
    {
        $this->setConfig('xaxis.label.style.fontSize', $fontSize);

        return $this;
    }

    /**
     * Font-weight for the annotation label
     *
     * @param string|int $fontWeight
     * @return $this
     */
    public function setXaxisLabelStyleFontWeight(string|int $fontWeight): self
    {
        $this->setConfig('xaxis.label.style.fontWeight', $fontWeight);

        return $this;
    }

    /**
     * Font-family for the annotation label
     *
     * @param string $fontFamily
     * @return $this
     */
    public function setXaxisLabelStyleFontFamily(string $fontFamily): self
    {
        $this->setConfig('xaxis.label.style.fontFamily', $fontFamily);

        return $this;
    }

    /**
     * A custom Css Class to give to the annotation label elements
     *
     * @param string $cssClass
     * @return $this
     */
    public function setXaxisLabelStyleCssClass(string $cssClass): self
    {
        $this->setConfig('xaxis.label.style.cssClass', $cssClass);

        return $this;
    }

    /**
     * Left padding for the label
     *
     * @param int $left
     * @return $this
     */
    public function setXaxisLabelStylePaddingLeft(int $left): self
    {
        $this->setConfig('xaxis.label.style.padding.left', $left);

        return $this;
    }

    /**
     * Right padding for the label
     *
     * @param int $right
     * @return $this
     */
    public function setXaxisLabelStylePaddingRight(int $right): self
    {
        $this->setConfig('xaxis.label.style.padding.right', $right);

        return $this;
    }

    /**
     * Top padding for the label
     *
     * @param int $top
     * @return $this
     */
    public function setXaxisLabelStylePaddingTop(int $top): self
    {
        $this->setConfig('xaxis.label.style.padding.top', $top);

        return $this;
    }

    /**
     * Bottom padding for the label
     *
     * @param int $bottom
     * @return $this
     */
    public function setXaxisLabelStylePaddingBottom(int $bottom): self
    {
        $this->setConfig('xaxis.label.style.padding.bottom', $bottom);

        return $this;
    }
}